<?php
App::uses('AppController', 'Controller');
/**
 * Bookmarks Controller
 *
 * @property Bookmark $Bookmark
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class BookmarksController extends Controller {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Session');

/**
 * index method
 *	displays top 10 bookmarks
 * @return void
 */
	public function index() {

		$this->set('bookmarks', $this->Bookmark->find('all', array(
			'conditions' => array(
				'flag' => false,
			),
			'order' => array('rank' => 'desc'),
			'limit' => 10,
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
		$this->set('bookmarks', $this->Bookmark->find('all', array(
			'conditions' => array(
				'flag' => false,
			),
			'order' => array('rank' => 'desc'),
			'limit' => 10,
			))
		);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {

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

		if (!$this->Bookmark->exists($id)) {

			throw new NotFoundException(__('Invalid bookmark'));

		}

		if ($this->request->is(array('post', 'put'))) {

			if ($this->Bookmark->save($this->request->data)) {

				$this->Session->setFlash(__('The bookmark has been saved.'));

				return $this->redirect(array('action' => 'index'));

			} else {

				$this->Session->setFlash(__('The bookmark could not be saved. Please, try again.'));

			}

		} else {

			$options = array('conditions' => array('Bookmark.' . $this->Bookmark->primaryKey => $id));
			$this->request->data = $this->Bookmark->find('first', $options);

		}

	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {

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
		return $this->redirect(array('action' => 'index'));

	}
	
}
