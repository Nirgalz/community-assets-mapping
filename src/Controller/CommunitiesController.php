<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Communities Controller
 *
 * @property \App\Model\Table\CommunitiesTable $Communities
 */
class CommunitiesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $communities = $this->paginate($this->Communities);

        $this->set(compact('communities'));
        $this->set('_serialize', ['communities']);
    }

    /**
     * View method
     *
     * @param string|null $id Community id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $community = $this->Communities->get($id, [
            'contain' => ['UsersTags']
        ]);

        //$tags = $this->Communities->UsersTags->where(['community_id' => $id]);


       /* $tags = [];
        $users = $community->users;
        foreach ($users as $user) {
           foreach ($user->tags as $tag) {
               if (array_key_exists($tag->name, $tags)) {
                   $tags[$tag->name]++ ;
               } else {
                    $tags[$tag->name] = 1 ;
               }
           }
        }*/

        //$tags = $this->Communities->Users->find('all')->where(['community_id' => $id])->contain('Tags');



        $this->set('community', $community);
        $this->set(compact('tags'));
        $this->set('_serialize', ['community']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $community = $this->Communities->newEntity();
        if ($this->request->is('post')) {
            $community = $this->Communities->patchEntity($community, $this->request->getData());
            if ($this->Communities->save($community)) {
                $this->Flash->success(__('The community has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The community could not be saved. Please, try again.'));
        }
        $this->set(compact('community'));
        $this->set('_serialize', ['community']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Community id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $community = $this->Communities->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $community = $this->Communities->patchEntity($community, $this->request->getData());
            if ($this->Communities->save($community)) {
                $this->Flash->success(__('The community has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The community could not be saved. Please, try again.'));
        }
        $this->set(compact('community'));
        $this->set('_serialize', ['community']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Community id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $community = $this->Communities->get($id);
        if ($this->Communities->delete($community)) {
            $this->Flash->success(__('The community has been deleted.'));
        } else {
            $this->Flash->error(__('The community could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
