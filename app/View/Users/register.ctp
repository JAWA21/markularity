<!-- File Location: app/View/Users/register.ctp -->

<h2>User Registration</h2>
<?php
	echo $this->Form->create('Users', array('action' => 'register'));
	echo $this->Form->input('first_name', array('label' => 'First Name', 'id' => 'firstname'));
	echo $this->Form->input('last_name', array('label' => 'Last Name', 'id' => 'lastname'));
	echo $this->Form->input('email', array('label' => 'Email Address', 'id' => 'email'));
	echo $this->Form->input('password', array('label' => 'Password', 'id' => 'password'));
	echo $this->Form->end('Register');
?>