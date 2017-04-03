<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Metatags Controller
 *
 * @property \App\Model\Table\MetatagsTable $Metatags
 */
class MetatagsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $metatags = $this->paginate($this->Metatags);

        $this->set(compact('metatags'));
        $this->set('_serialize', ['metatags']);
    }

    /**
     * View method
     *
     * @param string|null $id Metatag id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $metatag = $this->Metatags->get($id, [
            'contain' => ['UsersTags']
        ]);

        $this->set('metatag', $metatag);
        $this->set('_serialize', ['metatag']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $metatag = $this->Metatags->newEntity();
        if ($this->request->is('post')) {
            $metatag = $this->Metatags->patchEntity($metatag, $this->request->getData());
            if ($this->Metatags->save($metatag)) {
                $this->Flash->success(__('The metatag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The metatag could not be saved. Please, try again.'));
        }
        $this->set(compact('metatag'));
        $this->set('_serialize', ['metatag']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Metatag id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $metatag = $this->Metatags->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $metatag = $this->Metatags->patchEntity($metatag, $this->request->getData());
            if ($this->Metatags->save($metatag)) {
                $this->Flash->success(__('The metatag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The metatag could not be saved. Please, try again.'));
        }
        $this->set(compact('metatag'));
        $this->set('_serialize', ['metatag']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Metatag id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $metatag = $this->Metatags->get($id);
        if ($this->Metatags->delete($metatag)) {
            $this->Flash->success(__('The metatag has been deleted.'));
        } else {
            $this->Flash->error(__('The metatag could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
