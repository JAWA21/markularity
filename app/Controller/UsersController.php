<?php

class UsersController extends AppController {

	public function register() {

		if(!empty($this->request->data['Users'])) {

			if($this->User->save($this->request->data['Users'])) {

				$this->Session->setFlash(__('Registration Successful!'));
				return $this->redirect(array('action' => 'login'));

			}else {

				$this->Session->setFlash(__('Registration Was Not Successful. Please Try Again!'));
				return $this->redirect(array('action' => 'register'));

			}

		}else{
			echo "testing";
		}

	}

}