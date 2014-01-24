<?php 
/******************************
*
* User Model
* File Location: app/Model/User.php
*
******************************/

App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {

	//Hash user passwords before saving to the DB
	public function beforeSave($options = array()) {

		if(isset($this->data[$this->alias]['password'])) {

			$passwordHasher = new SimplePasswordHasher();
			$this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']);

		}
		return true;

	}

	//Basic registration validation
	public $validate = array(
		'firstname' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'First name is required.'
			)
		),
		'lastname' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'Last name is required.'
			)
		),
		'username' => array(
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
		),
		'role' => array(
			'valid' => array(
				'rule' => array('inlist', array('admin', 'author'))
			)
		)
	);

}