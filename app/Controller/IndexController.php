<?
App::uses('AppController', 'Controller');

class IndexController extends AppController{

    public $helpers = array('Html', 'Form');

    public function beforeFilter() {

                    parent::beforeFilter();

                    $this->Auth->allow('index');
                    
        }     

    public function index() {
    	//$bookmarks = $this->Index->topTen();

    	$this->set('bookmarks', $this->Index->topTen());
    }

    public function clickThru(){

    }

    public function thumbUp(){

    }

    public function thumbDown(){
    	
    }


}
