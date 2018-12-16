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
        $clientVideo = $this->ClientImages->newEntity();
        if ($this->request->is('post')) {
            // debug($this->request->data); die();
            if(!empty($this->request->data['url']['name'])){
                $fileName = $this->request->data['url']['name'];
                $this->loadModel('ClientFolders');
                $this->loadModel('Clients');
                $client = $this->Clients
                    ->find()
                    ->where(['users_id =' => $this->request->session()->read('Auth.User.id')])
                    ->first();
                $clientFolder = $this->ClientFolders
                    ->find()
                    ->where(['clients_id =' => $client->id,
                        'title ='=>$this->request->data['folder']
                ])
                    ->first();
                $uploadPath = 'folders/'.$client->name.'/'.$clientFolder->title.'/';
                $uploadFile = $uploadPath.$fileName;
                if(move_uploaded_file($this->request->data['url']['tmp_name'], $uploadFile)) {
                    $clientVideo->path = $this->request->webroot.$uploadFile;
                    $clientVideo->client_folders_id = $clientFolder->id;
                    if ($this->ClientImages->save($clientVideo)) {
                        $this->Flash->success(__('Ressource has been uploaded and inserted successfully.'));
                        return $this->redirect(['controller'=>'users','action'=>'index1','?'=>['titre'=>$this->request->data['folder']]]);
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
        $this->set(compact('clientVideo', 'clientFolders'));
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
                $i = parse_url($image->getAttribute('data-src'));
                if ( !isset($i['host']) ) {  
                    $im[] = 'https://'.$domaine.$image->getAttribute('src');
                    $im[] = 'https://'.$domaine.$image->getAttribute('data-src');
                } else {
                    $im[] = $image->getAttribute('data-src');
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
                    ->where(['clients_id =' => $client->id,
                        'title ='=>$this->request->data['folder']
                ])
                    ->first();
                $uploadPath = 'folders/'.$client->name.'/'.$clientFolder->title.'/';
                $fileName = "imgurl".$i.".jpg";
                $fileName1 = "imgurl".$i.".png";
                $uploadFile = $uploadPath.$fileName;
                $uploadFile1 = $uploadPath.$fileName1;
                $des = $uploadFile;
                $des1 = $uploadFile1;
                $data = file_get_contents($ima);
                file_put_contents($des1, $data);
                if( file_put_contents($des, $data)) {
                    $clientImage = $this->ClientImages->newEntity();
                    $clientImage->path = $this->request->webroot.$uploadFile;
                    $clientImage->client_folders_id = $clientFolder->id;
                    $clientImage1 = $this->ClientImages->newEntity();
                    $clientImage1->path = $this->request->webroot.$uploadFile1;
                    $clientImage1->client_folders_id = $clientFolder->id;
                    $this->ClientImages->save($clientImage1);
                    if ($this->ClientImages->save($clientImage)) {
                        $this->Flash->success(__('Image has been uploaded and inserted successfully.'));
                        return $this->redirect(['controller'=>'users','action'=>'index1','?'=>['titre'=>$this->request->data['folder']]]);
                        
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
