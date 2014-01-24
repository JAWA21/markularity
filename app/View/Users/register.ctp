<!-- ************************
*
* Register View
* File Location: app/View/Users/register.ctp 
*
************************ -->

<h2>User Registration</h2>
<?php
	echo $this->Form->create('User');
	echo $this->Form->input('firstname', array('label' => 'First Name', 'id' => 'first_name'));
	echo $this->Form->input('lastname', array('label' => 'Last Name', 'id' => 'last_name'));
	echo $this->Form->input('username', array('label' => 'Email Address', 'id' => 'email', 'type' => 'email'));
	echo $this->Form->input('password', array('label' => 'Password', 'id' => 'password'));
	echo $this->Form->hidden('role', array('id' => 'role', 'value' => 'author'));
	echo $this->Form->end(__('Register'));
?>

