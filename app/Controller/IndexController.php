<?
App::uses('AppController', 'Controller');

class IndexController extends AppController{

    public $helpers = array('Html', 'Form');

    public function index() {
    	$this->layout = 'index';
    	
    	//$bookmarks = $this->Index->topTen();

    	$this->set('bookmarks', $this->Index->topTen());
    }

    public function clickThru(){
    	$this->layout = 'index';


    }

    public function thumbUp(){
    	$this->layout = 'index';


    }

    public function thumbDown(){
    	$this->layout = 'index';

    	
    }


}


?>