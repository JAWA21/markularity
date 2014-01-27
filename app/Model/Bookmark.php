<?php
App::uses('AppModel', 'Model');
/**
 * Bookmark Model
 *
 */
class Bookmark extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'bookmark_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'bookmark_id' => array(
			'blank' => array(
				'rule' => array('blank'),
				'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'url' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'A url is required',
			),
			'url' => array(
				'rule' => array('url'),
				'message' => 'Must be in url format',
			),
		),
		'title' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'A title for the url is required',
			),
			'maxLength' => array(
				'rule' => array('maxLength', 30),
				'message' => 'Title can only be 30 characters or less',
			),
		),
		'category' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Bookmark category is required',
			),
		),
		'user_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
	);


}//end class
