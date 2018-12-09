<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Clients Controller
 *
 * @property \App\Model\Table\ClientsTable $Clients
 *
 * @method \App\Model\Entity\Client[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClientsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function profil()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $clients = $this->paginate($this->Clients);

        foreach ($clients as $client) {
            if ($client->id == $this->request->session()->read('Auth.User.id')) {
                $me = $client;
            }
        }
        // hta l hna khddam


        $this->loadModel('ClientFolders');
        $allFolders =  $this->paginate($this->ClientFolders);
        debug($allFolders);
        // $myFolders = array();
        // foreach ($allFolders as $folder) {
        //     if ($folder->clients_id == $me->id) {
        //         $myFolders[] = $folder;
        //     }
        // }     
        // debug($myFolders);   

        $this->set(compact('me'));
    }

    /**
     * View method
     *
     * @param string|null $id Client id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $client = $this->Clients->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('client', $client);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function register()
    {
        $client = $this->Clients->newEntity();
        // debug($this->request->query['client_data']);die();
        $client['name'] = $this->request->query['client_data']['name'];
        $client['users_id'] = $this->request->query['client_data']['users_id'];
        $client['start_abonement'] = $this->request->query['client_data']['start_abonement'];
        $client['duration_abonement'] = $this->request->query['client_data']['duration_abonement'];
        // // if ($this->request->is('post')) {
            $client = $this->Clients->patchEntity($client, $this->request->getData());
            if ($this->Clients->save($client)) {
                $dossier = 'folders/'.$client['name'];
                if(!is_dir($dossier)){
                   if (mkdir($dossier, 0777, true)) {
                       echo 'yey';
                   } else echo 'nop';
                }
                $this->Flash->success(__('The client has been saved.'));

                return $this->redirect(['controller' => 'Pages', 'action' => 'display', 'home']);
            }
            $this->Flash->error(__('The client could not be saved. Please, try again.'));
        // }
        $users = $this->Clients->Users->find('list', ['limit' => 200]);
        $this->set(compact('client', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Client id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $client = $this->Clients->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $client = $this->Clients->patchEntity($client, $this->request->getData());
            if ($this->Clients->save($client)) {
                $this->Flash->success(__('The client has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The client could not be saved. Please, try again.'));
        }
        $users = $this->Clients->Users->find('list', ['limit' => 200]);
        $this->set(compact('client', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Client id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $client = $this->Clients->get($id);
        if ($this->Clients->delete($client)) {
            $this->Flash->success(__('The client has been deleted.'));
        } else {
            $this->Flash->error(__('The client could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
