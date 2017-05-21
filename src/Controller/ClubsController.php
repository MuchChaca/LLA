<?php
namespace App\Controller;

use App\Controller\AppController;


/**
 * Clubs Controller
 *
 * @property \App\Model\Table\ClubsTable $Clubs
 */
class ClubsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $clubs = $this->paginate($this->Clubs);
        
        $this->set(compact('clubs'));
        $this->set('_serialize', ['clubs']);
    }

    /**
     * View method
     *
     * @param string|null $id Club id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $club = $this->Clubs->get($id, [
            'contain' => ['Trainers', 'Athletes']
        ]);
        
        

        $this->set('club', $club);
        $this->set('_serialize', ['club']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $club = $this->Clubs->newEntity();
        if ($this->request->is('post')) {
            $club = $this->Clubs->patchEntity($club, $this->request->data);
            if ($this->Clubs->save($club)) {
                $this->Flash->success(__('The club has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The club could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('club'));
        
    }

    /**
     * Edit method
     *
     * @param string|null $id Club id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $club = $this->Clubs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $club = $this->Clubs->patchEntity($club, $this->request->data);
            if ($this->Clubs->save($club)) {
                $this->Flash->success(__('Le club a été modifié avec succès!'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Le club n\'a pas put être modifié. Essayez plus tard.'));
            }
        }
        $this->set(compact('club'));
        $this->set('_serialize', ['club']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Club id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
		
		$article = $this->Clubs->get($id);
		if($this->Clubs->delete($article)){
			$this->Flash->success(__('Supression effectuée!'));
            return $this->redirect(['action' => 'index']);
		}
        $this->Flash->error(__('Suppression impossible.'));
        return $this->redirect(['action' => 'index']);
    }
}
