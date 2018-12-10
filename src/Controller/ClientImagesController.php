<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ClientImages Controller
 *
 * @property \App\Model\Table\ClientImagesTable $ClientImages
 *
 * @method \App\Model\Entity\ClientImage[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClientImagesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ClientFolders']
        ];
        $clientImages = $this->paginate($this->ClientImages);

        $this->set(compact('clientImages'));
    }

    /**
     * View method
     *
     * @param string|null $id Client Image id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clientImage = $this->ClientImages->get($id, [
            'contain' => ['ClientFolders']
        ]);

        $this->set('clientImage', $clientImage);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        // debug($this); die();
        $clientImage = $this->ClientImages->newEntity();
        if ($this->request->is('post')) {
            // debug($this->request->data); die();
            if(!empty($this->request->data['path']['name'])){
                $fileName = $this->request->data['path']['name'];
                $this->loadModel('ClientFolders');
                $this->loadModel('Clients');
                $client = $this->Clients
                    ->find()
                    ->where(['users_id =' => $this->request->session()->read('Auth.User.id')])
                    ->first();
                $clientFolder = $this->ClientFolders
                    ->find()
                    ->where(['clients_id =' => $client->id])
                    ->first();
                $uploadPath = 'folders/'.$client->name.'/'.$clientFolder->title.'/';
                $uploadFile = $uploadPath.$fileName;
                // // redimensionement
                // $source = $uploadFile;
                // $info=(pathinfo($source));
                // debug($source); die();
                // $dest=$info['dirname'].'/'.$info['filename'].'.'.$info['extension'];
                // $size = getimagesize($source);
                // if ($info['extension']=='jpg' || $info['extension'] =='jpeg')
                // {
                //     $imageRessource = imagecreatefromjpeg($source);
                //     $imgFinal = imagecreatetruecolor (700, 700);
                //     imagecopyresampled ($imgFinal,$imageRessource,0,0,0,0,700,700,$size[0],$size[1]);
                //     $quality=100;
                //     imagejpeg($imgFinal,$dest,$quality); 
                // } elseif ($info['extension']=='png') {
                //     $imageRessource = imagecreatefrompng($source);
                //     $imgFinal = imagecreatetruecolor (700, 700);
                //     imagecopyresampled ($imgFinal,$imageRessource,0,0,0,0,700,700,$size[0],$size[1]);
                //     $quality=9;
                //     imagepng($imgFinal,$dest,$quality); 
                // }   


                if(move_uploaded_file($this->request->data['path']['tmp_name'], $uploadFile)) {
                    $clientImage->path = $this->request->webroot.$uploadFile;
                    $clientImage->client_folders_id = $clientFolder->id;
                    if ($this->ClientImages->save($clientImage)) {
                        $this->Flash->success(__('Ressource has been uploaded and inserted successfully.'));
                        return $this->redirect(['controller'=>'ClientFolders','action' => 'workspace']);
                    }else{
                        $this->Flash->error(__('Unable to upload Ressource, please try again.'));
                    }
                }else{
                    $this->Flash->error(__('Unable to upload Ressource, please try again.'));
                }
            }else{
                $this->Flash->error(__('Please choose a file to upload.'));
            }
        }
        $clientFolders = $this->ClientImages->ClientFolders->find('list', ['limit' => 200]);
        $this->set(compact('clientImage', 'clientFolders'));
    }

    public function addurl()
    {
        if ($this->request->is('post')) {
            $url = $this->request->data['url'];
            $parse = parse_url($url);
            $domaine = $parse['host'];
            $html = file_get_contents($url);
            $dom = new \DOMDocument;
            @$dom->loadHTML($html);
            $dom->preserveWhiteSpace = false;
            $images = $dom->getElementsByTagName('img');
            $im = array();
            foreach ($images as $image) {
                $i = parse_url($image->getAttribute('src'));
                if ( !isset($i['host']) ) {  
                    $im[] = 'https://'.$domaine.$image->getAttribute('src');
                } else {
                    $im[] = $image->getAttribute('src');
                }
            }
            $r = $this->paginate($this->ClientImages);
            $i = sizeof($r);
            foreach ($im as $ima) {
                $this->loadModel('ClientFolders');
                $this->loadModel('Clients');
                $client = $this->Clients
                    ->find()
                    ->where(['users_id =' => $this->request->session()->read('Auth.User.id')])
                    ->first();
                $clientFolder = $this->ClientFolders
                    ->find()
                    ->where(['clients_id =' => $client->id])
                    ->first();
                $uploadPath = 'folders/'.$client->name.'/'.$clientFolder->title.'/';
                $fileName = "imgurl".$i.".jpg";
                $uploadFile = $uploadPath.$fileName;
                $des = $uploadFile;
                $data = file_get_contents($ima);
                if( file_put_contents($des, $data) ) {
                    $clientImage = $this->ClientImages->newEntity();
                    $clientImage->path = $this->request->webroot.$uploadFile;
                    $clientImage->client_folfers_id = $clientFolder->id;
                    if ($this->VideoRessources->save($image)) {
                        $this->Flash->success(__('Image has been uploaded and inserted successfully.'));
                        return $this->redirect(['action' => 'upload']);
                        
                    }else{
                        $this->Flash->error(__('Unable to upload image, please try again.'));
                    }
                }
                $i++;
            }
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Client Image id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clientImage = $this->ClientImages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clientImage = $this->ClientImages->patchEntity($clientImage, $this->request->getData());
            if ($this->ClientImages->save($clientImage)) {
                $this->Flash->success(__('The client image has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The client image could not be saved. Please, try again.'));
        }
        $clientFolders = $this->ClientImages->ClientFolders->find('list', ['limit' => 200]);
        $this->set(compact('clientImage', 'clientFolders'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Client Image id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clientImage = $this->ClientImages->get($id);
        if ($this->ClientImages->delete($clientImage)) {
            $this->Flash->success(__('The client image has been deleted.'));
        } else {
            $this->Flash->error(__('The client image could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
