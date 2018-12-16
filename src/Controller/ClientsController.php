<?php
namespace App\Controller;
use Cake\I18n\Time;
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
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $clients = $this->paginate($this->Clients);

        $this->set(compact('clients'));
    }
    public function profil()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $clients = $this->paginate($this->Clients);

        

        foreach ($clients as $client) {
            if ($client->users_id == $this->request->session()->read('Auth.User.id')) {
                $meClient = $client;
            }
        }
     
        $this->loadModel('ClientFolders');
        $allFolders =  $this->ClientFolders->find('all')->where(['clients_id'=>$meClient->id]);

        $this->loadModel('Users');
        $meUser =  $this->Users->find()->where(['id'=>$this->request->session()->read('Auth.User.id')])->first();
        
        $this->set(compact('meUser', 'meClient', 'allFolders'));

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
    public function add()
    {   
        $client = $this->Clients->newEntity();
        $this->request->data['name']=$this->request->query['name'];
        $this->request->data['users_id']=$this->request->query['users_id'];
        $client = $this->Clients->patchEntity($client, $this->request->getData());
        if ($this->Clients->save($client)) {
            $this->Flash->success(__('The client has been saved.'));
            return $this->redirect(['controller'=>'users','action' => 'login']);
        }
        $this->Flash->error(__('The client could not be saved. Please, try again.'));
        
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

    public function paiement(){
       
    }
    public function payer(){
        $time = Time::now();
        $id=(int) $this->request->query['id'];
        debug($id);
        $client = $this->Clients->find('all')->where(['users_id ='=>$this->request->query['id']])->first();
        
        if($client->end_abonement==null){
            $client->end_abonement=$time;
        }
        if($client->duration_abonement==null){
            $client->mois_abonne=0;
        }
        
        if($this->request->is(['get'])){
            switch ($this->request->query['mois']) {
                case '1':
                    $client->end_abonement=$client->end_abonement->addMonth(1);
                     $client->mois_abonne=$client->mois_abonne+1;
                    break;
                case '3':
                   $client->end_abonement=$client->end_abonement->addMonth(3);
                    $client->mois_abonne=$client->mois_abonne+3;
                    break;
                case '6':
                   $client->end_abonement=$client->end_abonement->addMonth(6);
                    $client->mois_abonne=$client->mois_abonne+6;
                    break;
                case '12':
                   $client->end_abonement=$client->end_abonement->addMonth(12);
                    $client->mois_abonne=$client->mois_abonne+12;
                    break;
                default:
                    break;
            }
            $this->Clients->save($client);
            debug($client);
            die();
        }
    }
    public function initialize(){
        parent::initialize();
        $this->Auth->allow(['paiement', 'add','payer']);
    }
    public function choice(){
        
        $id=(int) $this->request->session()->read('Auth.User.id');
        $client = $this->Clients->find('all')->where(['users_id ='=>$id])->first();
        

        if($client['nbr_essaie'] == 1){
            
        }else{
            $this->Flash->error(__('need to abonnement'));
            return $this->redirect(['action' => 'paiement']);
        }
    }
    public function cut(){
        if ($this->request->is(['post'])) {
            debug($this->request);
            die();
        }
    }
    public function ending(){
        debug($this->request);
        die();
    }
}
