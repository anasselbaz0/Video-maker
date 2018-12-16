<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ClientVideos Controller
 *
 * @property \App\Model\Table\ClientVideosTable $ClientVideos
 *
 * @method \App\Model\Entity\ClientVideo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClientVideosController extends AppController
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
        $clientVideos = $this->paginate($this->ClientVideos);

        $this->set(compact('clientVideos'));
    }

    /**
     * View method
     *
     * @param string|null $id Client Video id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clientVideo = $this->ClientVideos->get($id, [
            'contain' => ['ClientFolders']
        ]);

        $this->set('clientVideo', $clientVideo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        
        $clientVideo = $this->ClientVideos->newEntity();
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
                    ->where(['clients_id =' => $client->id])
                    ->first();
                $uploadPath = 'folders/'.$client->name.$clientFolder->title.'/';
                $uploadFile = $uploadPath.$fileName;
                if(move_uploaded_file($this->request->data['url']['tmp_name'], $uploadFile)) {
                    $clientVideo->path = $this->request->webroot.$uploadFile;
                    $clientVideo->client_folders_id = $clientFolder->id;
                    if ($this->ClientVideos->save($clientVideo)) {
                        $this->Flash->success(__('Ressource has been uploaded and inserted successfully.'));
                        return $this->redirect(['controller'=>'users','action'=>'index1']);
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
        $clientFolders = $this->ClientVideos->ClientFolders->find('list', ['limit' => 200]);
        $this->set(compact('clientVideo', 'clientFolders'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Client Video id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clientVideo = $this->ClientVideos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clientVideo = $this->ClientVideos->patchEntity($clientVideo, $this->request->getData());
            if ($this->ClientVideos->save($clientVideo)) {
                $this->Flash->success(__('The client video has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The client video could not be saved. Please, try again.'));
        }
        $clientFolders = $this->ClientVideos->ClientFolders->find('list', ['limit' => 200]);
        $this->set(compact('clientVideo', 'clientFolders'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Client Video id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clientVideo = $this->ClientVideos->get($id);
        if ($this->ClientVideos->delete($clientVideo)) {
            $this->Flash->success(__('The client video has been deleted.'));
        } else {
            $this->Flash->error(__('The client video could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
