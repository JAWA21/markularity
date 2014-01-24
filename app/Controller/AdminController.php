<?php

class AdminsController extends AppController{

	//public $scaffold = 'admin';

	public function admin_dashboard() {
        $title_for_layout = 'Dashbord';
        $this->set(compact('title_for_layout'));
    }
}