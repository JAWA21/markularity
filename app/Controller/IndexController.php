<?
class IndexController extends AppController{

    public $helpers = array('Html', 'Form','Js' => array('Jquery'));

    public function index() {
    	$this->layout = 'index';
    }


}


?>