<?php 
App::uses('AppController', 'Controller');

class ThumbsController extends Controller {

	public function thumUp() {

	}//end thumUp

	public function thumDwn() {

	}//end thumDwn

	public function clickThru($bookmark_id) {
		//from id, get the url from query
		//add point from clickthrough
		//new tab to url

		$query = $this->Bookmark->findByBookmarkId($bookmark_id);
		$url =  $query['Bookmark']['url'];

		$this->redirect('http://www.' . $url);
		

	}//end clickThrough

}//end class


?>