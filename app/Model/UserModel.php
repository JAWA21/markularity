<?php 
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {

	$name = 'User';

	public function beforeSave($options = array()) {

		if(isset($this->data[$this->alias]['password']) {

			$passwordHasher = new SimplePasswordHasher();
			$this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']);

		}
		return true;

	}

	public $validate = array(
		'first_name' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'First name is required.'
			)
		),
		'last_name' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'Last name is required.'
			)
		),
		'email' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'Email is required.'
			)
		),
		'password' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'Password is required.'
			)
		)
	);

}