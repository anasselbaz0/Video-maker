<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index1(){

        
        $this->loadModel('ClientVideos');
        $this->loadModel('ClientFolders');
        $this->loadModel('ClientImages');
        $this->loadModel('ClientMusics');
        $this->loadModel('Clients');
        $client=$this->Clients->find('all')->where([
                    'users_id ='=>$this->request->session()->read('Auth.User.id')
                ])->first();
        $folder=$this->ClientFolders->find('all')->where([
                    'clients_id ='=>$client['id'],
                    'title ='=>$this->request->query['titre']
                ])->first();
        $images=$this->ClientImages->find('all')->where([
                    'client_folders_id ='=>$folder['id']
                ]);
        $videos=$this->ClientVideos->find('all')->where([
                    'client_folders_id ='=>$folder['id']
                ]);
        $musics=$this->ClientMusics->find('all')->where([
                    'client_folders_id ='=>$folder['id']
                ]);
        $users = $this->paginate($this->Users);
        $this->loadModel('Clients');
            $client = $this->Clients
                ->find('all')
                ->where(['users_id =' => $this->request->session()->read('Auth.User.id')])
                ->first();
        $this->set(compact('users','client','videos','images','musics'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */

    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add(){
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            
                    
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                $id = $this
                    ->Users
                    ->find()
                    ->select(['id'])
                    ->where(['email =' => $this->request->data['email']])->first();
                return $this->redirect([
                    'controller' => 'clients',
                    'action'=>'add',
                    '?'=>[
                        'users_id'=>$id['id'],
                        'name'=>$this->request->data['name']
                    ]
                ]);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function login(){
        if ($this->request->is('post')) {
        
            $user = $this->Auth->identify();

            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect(['controller'=>'clients','action'=>'profil']);
            }
            $this->Flash->error('Votre username ou mot de passe est incorrect.');
        }

    }
    public function test(){
        debug($this->request);
        die();
    }
    public function cmd(){
        
    }
    public function logout(){
        $this->Flash->success('Vous êtes maintenant déconnecté.');
        return $this->redirect($this->Auth->logout());
    }
    public function initialize(){
    parent::initialize();
    // Ajoute logout à la liste des actions autorisées.
    $this->Auth->allow(['logout', 'add']);
    }

}
