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
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Bookmark->recursive = 0;
		$this->set('bookmarks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Bookmark->exists($id)) {
			throw new NotFoundException(__('Invalid bookmark'));
		}
		$options = array('conditions' => array('Bookmark.' . $this->Bookmark->primaryKey => $id));
		$this->set('bookmark', $this->Bookmark->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
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
	public function edit($id = null) {
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
	}}
