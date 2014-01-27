<?php

App::uses('AppModel', 'Model');
/**
 * Admin Model
 *
 */

class Admin extends AppModel{

	var $useTable = 'bookmarks';
	public $primaryKey = 'bookmark_id';

	public function topTen(){
		//$this->setSource('bookmarks'); //set the table being used
		

		$query = $this->find('all', array('order'=>'bookmark_id DESC'));
		//$query->select(['bookmark_id', 'title']);
		return $query;

	}
}