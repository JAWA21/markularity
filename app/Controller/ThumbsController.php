<?php 
App::uses('AppController', 'Controller');
App::uses('Bookmark', 'Model');

class ThumbsController extends AppController {


	public function thumbUp() {

	public function thumbUp($bookmark_id) {

		$this->loadModel('Bookmark');
	}

	public function thumbDown() {
		$query = $this->Bookmark->findByBookmarkId($bookmark_id);
		$url =  $query['Bookmark']['url'];

		//have to figure out how to get the session
		$user_id = 0;
		if($this->Auth->loggedIn()) {
			$user_id = $this->Auth->User('user_id');
		}
	}

		$thumbed = array(
			'bookmark_id' => $bookmark_id,
			'thumbed_user_id' => $user_id,
			'thumbed' => 1,
		);

		$this->Thumb->save($thumbed);

	}//end thumbUp

	public function thumbDown() {

	}//end thumDwn

}//end class


?>