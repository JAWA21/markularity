<?php

class UsersController extends AppController {

	public function register() {

		if(!empty($this->params['form'])) {

			if($this->User->save($this->params('form')) {

				$this->Session->setFlash(__('Registration Successful!'));
				return $this->redirect(array('action' => 'login'));

			}else {

				$this->Session->setFlash(__('Registration Was Not Successful. Please Try Again!'));
				return $this->redirect(array('action' => 'register'));

			}

		}

	}

}