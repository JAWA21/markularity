<?php
App::uses('AppController', 'Controller');
/******************************
*
* UsersController
* File Location: app/Controller/UsersController.php
*
******************************/
//App::uses('AuthComponent', 'Component/Auth');

class UsersController extends AppController {

	public function beforeFilter() {

    		parent::beforeFilter();

    		// Allow users to register, login, logout.
    		$this->Auth->allow('register', 'login', 'logout');

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

	public function profile(){

	}

	public function register() {

				$this->layout = 'register';

        		if ($this->request->is('post')) {

        			$user = array(
				'username' => $this->request->data['User']['username'],
				'password' =>  $this->request->data['User']['password'],
				'firstname' => $this->request->data['User']['firstname'],
				'lastname' => $this->request->data['User']['lastname'],
				'role' => 'author'
			);

        			$createdSuccess = $this->User->save(array(
        				'User' => $user
    			));

            			if (!$createdSuccess) {
            				$this->Session->setFlash(__('Registration Was Not Successful. Please Try Again!'));
            				return;
            			}

            			$this->Session->setFlash(__('Registration Successful!'));
            			$this->Auth->login();	

        		}

    	}

	public function edit() {

		// validate they are logged in

		if($this->request->is('post') || $this->request->is('put')) {

			$user = array(
				//'user_id' => //get this from the session,
				'username' => $this->request->data['username'],
				'firstname' => $this->request->data['firstname'],
				'lastname' => $this->request->data['lastname']
			);

			$createdSuccess = $this->User->save($user );

			if($createdSuccess) {

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

	public function login(){

		$this->layout = 'login';

		$this->Auth->authenticate = array(
			'Form' => array(

			'fields' => array('username' => 'username', 'password' =>'password')
   			)

		);

		if($this->Auth->login($this->request->data('Users'))) {

		        	return $this->redirect($this->Auth->redirect());

		}

		$this->Session->setFlash(__('Invalid username and/or password. Please try again'));

	}

	public function logout() {

		return $this->redirect($this->Auth->logout());

	}

}