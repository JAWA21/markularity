<?php
App::uses('AppController', 'Controller');
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

		//$this->set('title_for_layout', 'This is the page title');
		// $this->set('bookmarks', $this->Bookmark->find('all', array(
		// 	'conditions' => array(
		// 		'flag' => false,
		// 	),
		// 	'order' => array('rank' => 'desc'),
		// 	'limit' => 10,
		// 	))
		//);

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