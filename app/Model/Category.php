<?php 
App::uses('AppModel', 'Model');
/**
*Publication Model
*
*/
class Category extends AppModel {

/**
*Primary key field
*
*@var string
*/
public $primaryKey = 'category_id';

/**
*Display field
*
*@var string
*/
public $displayField = 'category_name';

/**
*Validation rules
*
*@var array
*/
public $validate = array(
	'category_id' => array(
		'blank' => array(
			'rule' => 'blank',
			'on' => 'create',
		),
	),
	'category_name' => array(
		'words' => array(
			'rule' => array('custom', '/([\w.-]+ )+[\w+.-]/'),
			'message' => 'The publication name can only contain letters, numbers, and spaces',
		),
		'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message' => 'The publication name must not be empty',
		),
		'maxLength' => array(
			'rule' => array('maxLength', 100),
			'message' => 'The publicatio name must not be longer then 100 characters',
		),
		'isUnique' => array(
			'rule' => 'isUnique',
			'message' => 'The publication name already exists'
		),
	),
);


}//end class



?>