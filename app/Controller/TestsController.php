<?php

App::uses('User', 'Model');

class TestsController extends Controller {

	public function index() {

		Debug($this -> Session -> read('user'));

	}

}
