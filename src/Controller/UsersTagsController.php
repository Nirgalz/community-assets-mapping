<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UsersTags Controller
 *
 * @property \App\Model\Table\UsersTagsTable $UsersTags
 */
class UsersTagsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Tags']
        ];
        $usersTags = $this->paginate($this->UsersTags);

        $this->set(compact('usersTags'));
        $this->set('_serialize', ['usersTags']);
    }

    /**
     * View method
     *
     * @param string|null $id Users Tag id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usersTag = $this->UsersTags->get($id, [
            'contain' => ['Users', 'Tags']
        ]);

        $this->set('usersTag', $usersTag);
        $this->set('_serialize', ['usersTag']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usersTag = $this->UsersTags->newEntity();
        if ($this->request->is('post')) {
            $usersTag = $this->UsersTags->patchEntity($usersTag, $this->request->getData());
            if ($this->UsersTags->save($usersTag)) {
                $this->Flash->success(__('The users tag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users tag could not be saved. Please, try again.'));
        }
        $users = $this->UsersTags->Users->find('list', ['limit' => 200]);
        $tags = $this->UsersTags->Tags->find('list', ['limit' => 200]);
        $this->set(compact('usersTag', 'users', 'tags'));
        $this->set('_serialize', ['usersTag']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Users Tag id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usersTag = $this->UsersTags->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usersTag = $this->UsersTags->patchEntity($usersTag, $this->request->getData());
            if ($this->UsersTags->save($usersTag)) {
                $this->Flash->success(__('The users tag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users tag could not be saved. Please, try again.'));
        }
        $users = $this->UsersTags->Users->find('list', ['limit' => 200]);
        $tags = $this->UsersTags->Tags->find('list', ['limit' => 200]);
        $this->set(compact('usersTag', 'users', 'tags'));
        $this->set('_serialize', ['usersTag']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Users Tag id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usersTag = $this->UsersTags->get($id);
        if ($this->UsersTags->delete($usersTag)) {
            $this->Flash->success(__('The users tag has been deleted.'));
        } else {
            $this->Flash->error(__('The users tag could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
