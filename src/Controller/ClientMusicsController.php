<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ClientMusics Controller
 *
 * @property \App\Model\Table\ClientMusicsTable $ClientMusics
 *
 * @method \App\Model\Entity\ClientMusic[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClientMusicsController extends AppController
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
        $clientMusics = $this->paginate($this->ClientMusics);

        $this->set(compact('clientMusics'));
    }

    /**
     * View method
     *
     * @param string|null $id Client Music id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clientMusic = $this->ClientMusics->get($id, [
            'contain' => ['ClientFolders']
        ]);

        $this->set('clientMusic', $clientMusic);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clientMusic = $this->ClientMusics->newEntity();
        if ($this->request->is('post')) {
            $clientMusic = $this->ClientMusics->patchEntity($clientMusic, $this->request->getData());
            if ($this->ClientMusics->save($clientMusic)) {
                $this->Flash->success(__('The client music has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The client music could not be saved. Please, try again.'));
        }
        $clientFolders = $this->ClientMusics->ClientFolders->find('list', ['limit' => 200]);
        $this->set(compact('clientMusic', 'clientFolders'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Client Music id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clientMusic = $this->ClientMusics->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clientMusic = $this->ClientMusics->patchEntity($clientMusic, $this->request->getData());
            if ($this->ClientMusics->save($clientMusic)) {
                $this->Flash->success(__('The client music has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The client music could not be saved. Please, try again.'));
        }
        $clientFolders = $this->ClientMusics->ClientFolders->find('list', ['limit' => 200]);
        $this->set(compact('clientMusic', 'clientFolders'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Client Music id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clientMusic = $this->ClientMusics->get($id);
        if ($this->ClientMusics->delete($clientMusic)) {
            $this->Flash->success(__('The client music has been deleted.'));
        } else {
            $this->Flash->error(__('The client music could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
