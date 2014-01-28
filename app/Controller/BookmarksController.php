<?php
App::uses('AppController', 'Controller');
/**
 * Bookmarks Controller
 *
 * @property Bookmark $Bookmark
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class BookmarksController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Session');


	//debug($this->Auth->User('user_id'));

/**
 * index method
 *	displays top 10 bookmarks
 * @return void
 */
	public function index() {

		//var_dump($this->Auth->User('user_id'));

		$this->layout = 'admin';

		$username = $this->Session->read('Auth.Users.username');

		$this->set('bookmarks', $this->Bookmark->find('all', array(
			'conditions' => array(
				'flag' => false,
			),
			'order' => array('rank' => 'desc'),
			'limit' => 10
			))
		);
	}//end index

/**
 * view method
 *
 * @throws NotFoundException
 * Allows a user to view their posts
 * @param string $user_id
 * @return void
 */
	//would I still need the user Id to get their stuff
	public function view($user_id = null) {
		
		$this->layout = 'admin';
		
		//pull just the users specific bookmarks
		$this->set('bookmarks', $this->Bookmark->find('all', array(
			'conditions' => array(
				'flag' => false,
				'user_id' => $this->Auth->User('user_id'),
			),
			'order' => array('rank' => 'desc'),
			'limit' => 10,
			))
		);

		// $this->set('bookmarks', $this->Bookmark->findByUserId($user_id, array(
		// 	'conditions' => array(
		// 		'flag' => false,
		// 	),
		// 	'order' => array('rank' => 'desc'),
		// 	'limit' => 10,	
		// )));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		
		$this->layout = 'admin';

		if ($this->request->is('post')) {

			//$this->request->data['Bookmark']['user_id'] = $this->Auth->user('id');
			$this->Bookmark->create();

			if ($this->Bookmark->save($this->request->data)) {

				$this->Session->setFlash(__('The bookmark has been saved.'));
				return $this->redirect(array('action' => 'index'));

			} else {

				$this->Session->setFlash(__('The bookmark could not be saved. Please, try again.'));

			}

		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($bookmark_id = null) {
		
		$this->layout = 'admin';
		
		if(!$bookmark_id) {
			throw new NotFoundException(__('Invalid Bookmark'));
		}

		$bookmark = $this->Bookmark->findByBookmarkId($bookmark_id);
		if(!$bookmark) {
			throw new NotFoundException(__('Invalid Bookmark'));
		}

		if($this->request->is(array('post', 'put'))) {
			$this->Bookmark->id = $bookmark_id;
			if($this->Bookmark->save($this->request->data)) {
				$this->Session->setFlash(__('Bookmark edited'));
				return $this->redirect(array('action' => 'view'));
			}
			$this->Session->setFlash(__('Unable to update bookmark'));
		}
		if(!$this->request->data) {
			$this->request->data = $bookmark;
		}
	}//end edit

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		
		$this->layout = 'admin';

		$this->Bookmark->id = $id;
		if (!$this->Bookmark->exists()) {

			throw new NotFoundException(__('Invalid bookmark'));

		}

		$this->request->onlyAllow('post', 'delete');

		if ($this->Bookmark->delete()) {

			$this->Session->setFlash(__('The bookmark has been deleted.'));

		} else {

			$this->Session->setFlash(__('The bookmark could not be deleted. Please, try again.'));

		}
		return $this->redirect(array('action' => 'view'));

	}//end delete

/**
 * clickThrough method
 *
 *@param int $bookmark_id
 *takes the id passed through, gets the link, add the point, redirect in new tab
 */
	public function clickThru($bookmark_id) {
		//from id, get the url from query
		//add point from clickthrough
		//new tab to url

		$query = $this->Bookmark->findByBookmarkId($bookmark_id);
		$url =  $query['Bookmark']['url'];

		$this->redirect('http://www.' . $url);
		

	}//end clickThrough

}
