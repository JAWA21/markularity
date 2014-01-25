<?php
App::uses('AppModel', 'Model');
/**
 * Category Model
 *
 * @property Category $Category
 * @property Category $Category
 */
class Category extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'category_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'category_name';


/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Category' => array(
			'className' => 'Bookmarks',
			'foreignKey' => 'category',
		)
	);

}
