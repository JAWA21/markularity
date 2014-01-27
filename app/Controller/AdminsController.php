<?php
App::uses('AppController', 'Controller');
App::uses('Bookmark', 'Model');
/**
 * Bookmarks Controller
 *
 * @property Bookmark $Bookmark
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */

class AdminsController extends Controller{

/**
 * Components
 *
 * @var array
 */
	public $components = array('Session');

	public function index() {
		$this->layout = 'admin';

		//$this->set('bookmarks', $this->Admin->topTen());

	}

	public function users(){
		//$this->set('users', $this->User->find('all'));
	
	}

	public function bookmarks(){

	}

	public function deleteBookmark($id = null) {


	}

	public function deleteUser($id = null) {

	}
}