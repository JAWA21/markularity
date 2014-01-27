<!-- ************************
*
* Register View
* File Location: app/View/Users/register.ctp 
*
************************ -->

<!-- <h2>User Registration</h2> -->

<div class='signin'>
<?php echo $this->Form->create('User'); ?>
  <h2 class="form-signin-heading">User Registration</h2>
  <?php 
  	echo $this->Form->input('firstname', array('id' => 'firstname','class'=>'form-control'));
	echo $this->Form->input('lastname', array('id' => 'lastname','class'=>'form-control'));
	echo $this->Form->input('username', array('id' => 'email','class'=>'form-control'));
	echo $this->Form->input('password', array('id' => 'password','class'=>'form-control'));
	echo $this->Form->hidden('role', array('value' => 'author'));
  	echo $this->Form->end('Register',array('class'=>'btn btn-lg btn-primary btn-block'));	
  	// <button id="regis_btn" class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
 ?>
</div>
