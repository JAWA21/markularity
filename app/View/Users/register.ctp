<!-- ************************
*
* Register View
* File Location: app/View/Users/register.ctp 
*
************************ -->

<!-- <h2>User Registration</h2> -->
<?php
	// echo $this->Form->create('User');
	// echo $this->Form->input('firstname', array('label' => 'First Name', 'id' => 'first_name'));
	// echo $this->Form->input('lastname', array('label' => 'Last Name', 'id' => 'last_name'));
	// echo $this->Form->input('username', array('label' => 'Email Address', 'id' => 'email', 'type' => 'email'));
	// echo $this->Form->input('password', array('label' => 'Password', 'id' => 'password'));
	// echo $this->Form->hidden('role', array('id' => 'role', 'value' => 'author'));
	// echo $this->Form->end(__('Register'));
?>

<div class='signin'>
<?php echo $this->Form->create('Registration', array('action' => 'register')); ?>
  <h2 class="form-signin-heading">User Registration</h2>
  <?php echo $this->Form->input('first_name', array('label' => 'First Name', 'id' => 'first_name','class'=>'form-control'));
		echo $this->Form->input('last_name', array('label' => 'Last Name', 'id' => 'last_name','class'=>'form-control'));
		echo $this->Form->input('email', array('label' => 'Email Address', 'id' => 'email','class'=>'form-control'));
		echo $this->Form->input('password', array('label' => 'Password', 'id' => 'password','class'=>'form-control'));
  		echo $this->Form->end('Register',array('class'=>'btn btn-lg btn-primary btn-block'));	
  		// <button id="regis_btn" class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
  ?>
</div>
