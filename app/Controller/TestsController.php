<?php

App::uses('User', 'Model');
App::uses('AppController', 'Controller');
App::uses('BookmarksController', 'Controller');
App::uses('ClickThrough', 'Model');
App::uses('Thumb', 'Model');

class TestsController extends AppController {

	public function index() {
		// $this->layout = 'admin';
		if($this->Auth->login()){
            $this->layout = 'admin';
        }
	}

}
