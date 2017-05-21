<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Controller\LicenseesController;

class AthletesController extends LicenseesController{
	
	public function index(){
		$athletes = $this->paginate($this->Athletes);
        
        $this->set(compact('athletes'));
        $this->set('_serialize', ['athletes']);
	}
	
	public function view($id = null){
        $athlete = $this->Athletes->get($id, [
            'contain' => ['Clubs', 'Categories', 'Trainers']
        ]);
        $this->set(compact('athlete'));
    }
    
    public function add(){
        $athlete = $this->Athletes->newEntity();
        if($this->request->is('post')){
            $athlete = $this->Athletes->patchEntity($athlete, $this->request->data);
            if($this->Athletes->save($athlete)){
                $this->Flash->success(__('L\'athlète a été ajouté avec succès!'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erreur lors de l\'ajout de l\'athlète.'));
        }
        $clubs = $this->Athletes->Clubs->find('list', ['limit' => 200]);
        $categories = $this->Athletes->Categories->find('list', ['limit' => 200]);
        $trainers = $this->Athletes->Trainers->find('list', [
                                                                'keyField' => 'id',
                                                                'valueField' => ['id', 'last_name', 'first_name']
                                                            ]);
        $sexes = ['F', 'M'];
        
        $this->set(compact('athlete', 'clubs', 'categories', 'trainers', 'sexes'));
        
        $this->set('_serialize', ['athlete']);
    }
    
    public function edit($id = null){
        $athlete = $this->Athletes->get($id);
        
        if($this->request->is(['post', 'put'])){
            $this->Athletes->patchEntity($athlete, $this->request->data);
            if($this->Athletes->save($athlete)){
                $this->Flash->success(__('L\'athlète a bien été modifié!'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erreur lors de la modification!'));
        }
        
        $clubs = $this->Athletes->Clubs->find('list', ['limit' => 200]);
        $categories = $this->Athletes->Categories->find('list', ['limit' => 200]);
        $trainers = $this->Athletes->Trainers->find('list', [
                                                                'keyField' => 'id',
                                                                'valueField' => ['id', 'last_name', 'first_name']
                                                            ]);
        $sexes = ['F', 'M'];
        
        $this->set(compact('athlete', 'clubs', 'categories', 'trainers', 'sexes'));
        
        $this->set('athlete', $athlete);
    }
    
    public function delete($id){
        $this->request->allowMethod(['post', 'put']);
        
        $athlete = $this->Athletes->get($id);
        if($this->Athletes->delete($athlete)){
            $this->Flash->success(__('Athlète supprimé avec succès!'));
            return $this->redirect(['action' => 'index']);
        }
    }
}