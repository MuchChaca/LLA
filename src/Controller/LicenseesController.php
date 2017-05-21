<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\App;


//App::import('Controller', 'Athletes');
//App::import('Controller', 'Trainers');

class LicenseesController extends AppController
{
    
    public function initialize(){
        parent::initialize();
        
        $this->loadComponent('Paginator');
        $this->loadComponent('Flash');
    }
    
    public function index(){
        $this->loadModel('Athletes');
        $this->loadModel('Trainers');
        
        $athletes = $this->Athletes->find();
        $trainers = $this->Trainers->find();
        
        //$trainers = $this->paginate($trainers, ['limit' => '10']);
        $athletes = $this->paginate($athletes, ['limit' => '10']);
        
        
        $this->set(compact('athletes'));
        $this->set(compact('trainers'));
		
	}
}

