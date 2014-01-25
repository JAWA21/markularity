<?php

class AdminController extends AppController{

	//public $scaffold = 'admin';
	public $components = array('Session');

	public function index() {
    //to retrieve all users, need just one line
   // $this->set('users', $this->User->find('all'));
	}

	public function users(){

	}

	public function bookmarks(){

	}
}