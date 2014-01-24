<?php

class UsersController extends AppController {

	public function beforeFilter() {

    		parent::beforeFilter();
    		// Allow users to register and logout.
    		$this->Auth->allow('register', 'logout');

	}

	public function index() {

		$this->User->recursive = 0;
		$this->set('users', $this->paginate());

	}

	public function view($id = null) {

		$this->User->id = $id;
		if (!$this->User->exists()) {

			throw new NotFoundException(__('Invalid user'));

		}
		$this->set('user', $this->User->read(null, $id));

	}

	public function register() {

        		if ($this->request->is('post')) {

            			$this->User->create();
            			if ($this->User->save($this->request->data)) {

                			$this->Session->setFlash(__('Registration Successful!'));
                			return $this->redirect(array('action' => 'login'));

            			}
            			$this->Session->setFlash(__('Registration Was Not Successful. Please Try Again!'));

        		}

    	}

	public function edit($id = null) {

		$this->User->id = $id;
		if(!$this->User->exists()) {

			throw new NotFoundException(__('Invalid user'));

		}

		if($this->request->is('post') || $this->request->is('put')) {

			if($this->User->save($this->request->data)) {

				$this->Session->setFlash(__('The user has been saved'));
				return $this->redirect(array('action' => 'index'));

			}else {

				$this->Session->setFlash(__('The user could not be saved. Please try again'));

			}

		}else {

			$this->request->data = $this->User->read(null, $id);
			unset($this->request->data['User']['password']);

		}

	}

	public function delete($id = null) {

		$this->request->onlyAllow('post');

		$this->User->id = $id;
		if(!$this->User->exists()) {

			throw new NotFoundException(__('Invalid User'));

		}
		if($this->User->delete()) {

			$this->Session->setFlash(__('The user has been deleted'));
			return $this->redirect(array('action' => 'index'));

		}else {

			$this->Session->setFlash(__('The user was not deleted'));
			return $this->redirect(array('action' => 'index'));

		}

	}

	public function login() {

		if($this->request->is('post')) {

			if($this->Auth->login()) {

				echo "logged in";
				return $this->redirect($this->Auth->redirect());

			}
			$this->Session->setFlash(__('Invalid username and/or password. Please try again'));

		}

	}

	public function logout() {

		return $this->redirect($this->Auth->logout());

	}

}