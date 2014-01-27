<?php
App::uses('AppController', 'Controller');
App::uses('BookmarksController', 'Controller');

/******************************
*
* UsersController
* File Location: app/Controller/UsersController.php
*
*
* Code for getting the user_id from the Session:
* echo '<pre>';
* var_dump($this->Auth->User('user_id'));
* echo '</pre>';

******************************/

class UsersController extends AppController {

	var $name = 'Users';
	//var $components = array('Auth');

	public function beforeFilter() {

    		parent::beforeFilter();

    		// Allow users to register, logout.
    		//$this->Auth->allow('add', 'login', 'logout');

	} //End beforeFilter()

	public function index() {

		$this->User->recursive = 0;
		$this->set('users', $this->paginate());

	} //End index()

	public function view($id = null) {

		$this->User->id = $id;
		if (!$this->User->exists()) {

			throw new NotFoundException(__('Invalid user'));

		}
		$this->set('user', $this->User->read(null, $id));

	} //End view()

	public function profile(){

	}

	public function  add() {

        		if ($this->request->is('post')) {

        			$this->User->create();

        			if($this->User->save($this->request->data)) {
        				$this->Session->write('username',$this->request->data['User']['firstname']);
        				// var_dump($this->request->data['User']['firstname']);
        				$this->Session->setFlash(__('Registration Successful!'));
        				return $this->redirect(array('controller'=>'Bookmarks', 'action' => 'index'));

        			}
        			$this->Session->setFlash(__('Information was not saved. Please try again.'));


   //      			$user = array(
			// 	'username' => $this->request->data['User']['username'],
			// 	'password' =>  $this->request->data['User']['password'],
			// 	'firstname' => $this->request->data['User']['firstname'],
			// 	'lastname' => $this->request->data['User']['lastname'],
			// 	'role' => 'author'
			// );
   //      			//Debugger::dump($this->request->data);
   //      			$createdSuccess = $this->User->save(array(
   //      				'User' => $user
   //  			));

   //          			if (!$createdSuccess) {
   //          				$this->Session->setFlash(__('Registration Was Not Successful. Please Try Again!'));
   //          				return;
   //          			}else {

   //          				$this->Session->setFlash(__('Registration Successful!'));
   //          				$this->Auth->login($user);

   //          			}

        		}

    	} //End register()

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

	} //End edit()

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

	} //End delete()

	public function login(){

		if ($this->request->is('post')) {

		        if ($this->Auth->login()) {

		            return $this->redirect($this->Auth->redirect());
<<<<<<< HEAD
		            
=======
>>>>>>> 164245c0ebb1eb75f9d49c25e16cfd2adb9cef71
		            //$this->Session->setFlash(__('Welcome ' . $username . '! You have successfully logged in.'));
		            //$this->Session->setFlash(__('Success'));
		        }
		        $this->Session->setFlash(__('Invalid username or password, try again'));

			// $authResult = $this->Auth->authenticate = array(
			// 	'Form' => array(

			// 		'fields' => array('username' => 'test@test.com', 'password' =>'test')
	  //  			)

			// );
			// Debugger::dump($authResult);

			// $bool = true;

			// array_push($this->Auth->authenticate['Form'], $bool);

			// if($this->Auth->authenticate['Form'][0] === true) {

			// 	$this->redirect($this->Auth->redirect(array(
			// 		'controller' => 'bookmarks',
			// 		'action' => 'index'
			// 		)
			// 	));

			// }else {

			// 	$this->Session->setFlash(__('Invalid username and/or password. Please try again'));

			// }

		// }
		
	     }
	} //End login()

	// public function loginView() {

	// } //End loginView()

	public function userLogout() {

		$this->Session->setFlash(__('You have successfully logged out. Goodbye.'));
		return $this->redirect($this->Auth->logout());

	} //End logout()

}