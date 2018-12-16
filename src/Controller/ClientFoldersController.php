<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ClientFolders Controller
 *
 * @property \App\Model\Table\ClientFoldersTable $ClientFolders
 *
 * @method \App\Model\Entity\ClientFolder[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClientFoldersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients']
        ];
        $clientFolders = $this->paginate($this->ClientFolders);

        $this->set(compact('clientFolders'));
    }

    /**
     * View method
     *
     * @param string|null $id Client Folder id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clientFolder = $this->ClientFolders->get($id, [
            'contain' => ['Clients']
        ]);

        $this->set('clientFolder', $clientFolder);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clientFolder = $this->ClientFolders->newEntity();
        if ($this->request->is('post')) {
            $clientFolder = $this->ClientFolders->patchEntity($clientFolder, $this->request->getData());
            $this->loadModel('Clients');
            $clientFolder['clients_id'] = $this->Clients
                ->find()
                ->select(['id'])
                ->where(['users_id =' => $this->request->session()->read('Auth.User.id')])
                ->first()['id'];
            if ($this->ClientFolders->save($clientFolder)) {
                $this->loadModel('Clients');
                $client_name = $this->Clients
                    ->find()
                    ->select(['name'])
                    ->where(['users_id =' => $this->request->session()->read('Auth.User.id')])
                    ->first();
                $dossier = 'folders/'.$client_name['name'].'/'.$clientFolder['title'];
                if(!is_dir($dossier)){
                   if (mkdir($dossier, 0777, true)) {
                       echo 'yey';
                   } else echo 'nop';
                }
                return $this->redirect(['controller' => 'users','action' => 'index1','?'=>['titre'=>$this->request->data['title']]]);
            }
            $this->Flash->error(__('The client folder could not be saved. Please, try again.'));
        }
        $clients = $this->ClientFolders->Clients->find('list', ['limit' => 200]);
        $this->set(compact('clientFolder', 'clients'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Client Folder id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clientFolder = $this->ClientFolders->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clientFolder = $this->ClientFolders->patchEntity($clientFolder, $this->request->getData());
            if ($this->ClientFolders->save($clientFolder)) {
                $this->Flash->success(__('The client folder has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The client folder could not be saved. Please, try again.'));
        }
        $clients = $this->ClientFolders->Clients->find('list', ['limit' => 200]);
        $this->set(compact('clientFolder', 'clients'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Client Folder id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clientFolder = $this->ClientFolders->get($id);
        if ($this->ClientFolders->delete($clientFolder)) {
            $this->Flash->success(__('The client folder has been deleted.'));
        } else {
            $this->Flash->error(__('The client folder could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function text(){
        
    }
}
