<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Controller\LicenseesController;

class TrainersController extends LicenseesController{
	
    
	
    public function index(){
        $trainers = $this->paginate($this->Trainers);
        
        $this->set(compact('trainers'));
        $this->set('_serialize', ['trainers']);
        
    }
    
	public function view($id = null){
        $trainer = $this->Trainers->get($id, [
            'contain' => ['Clubs', 'Specialties', 'Athletes']
        ]);
        $this->set(compact('trainer'));
    }
    
    public function add(){
        $trainer = $this->Trainers->newEntity();
        if($this->request->is('post')){
            $trainer = $this->Trainers->patchEntity($trainer, $this->request->data);
            if($this->Trainers->save($trainer)){
                $this->Flash->success(__('L\'entraineur a été ajouté avec succès!'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erreur lors de l\'ajout de l\'entraineur.'));
        }
        $clubs = $this->Trainers->Clubs->find('list', ['limit' => 200]);
        $specialties = $this->Trainers->Specialties->find('list', ['limit' => 200]);
        $sexes = ['F', 'M'];
        
        $this->set(compact('trainer', 'clubs', 'specialties', 'sexes'));
        
    }
    
    public function edit($id = null){
        $trainer = $this->Trainers->get($id);
        
        if($this->request->is(['post', 'put'])){
            $this->Trainers->patchEntity($trainer, $this->request->data);
            if($this->Trainers->save($trainer)){
                $this->Flash->success(__('L\'entraineur a bien été modifié!'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erreur lors de la modification!'));
        }
        
        $clubs = $this->Trainers->Clubs->find('list', ['limit' => 200]);
        $specialties = $this->Trainers->Specialties->find('list', ['limit' => 200]);
        $sexes = ['F', 'M'];
        
        $this->set(compact('trainer', 'clubs', 'specialties', 'sexes'));
        
    }
    
    public function delete($id){
        $this->request->allowMethod(['post', 'put']);
        
        $trainer = $this->Trainers->get($id);
        if($this->Trainers->delete($trainer)){
            $this->Flash->success(__('Entraineur supprimé avec succès!'));
            return $this->redirect(['action' => 'index']);
        }
    }
}