<!-- ************************
*
* Register View
* File Location: app/View/Users/add.ctp 
*
************************ -->

<!-- <h2>User Registration</h2> -->


<div class='navbar-form'>
<?php echo $this->Form->create('User', array('action' => 'add')); ?>
  <h2 class="form-signin-heading">User Registration</h2>
  <?php 
  	echo $this->Form->input('firstname', array('label' => 'First Name', 'id' => 'firstname','class'=>'form-control'));
	echo $this->Form->input('lastname', array('label' => 'Last Name', 'id' => 'lastname','class'=>'form-control'));
	echo $this->Form->input('username', array('label' => 'Username', 'id' => 'username','class'=>'form-control'));
	echo $this->Form->input('password', array('label' => 'Password', 'id' => 'password','class'=>'form-control'));
	echo $this->Form->hidden('role', array('value' => 'author'));?>
	<input type="submit" id="regis_btn" class="btn btn-lg btn-primary btn-block" value="Register"><?
  	echo $this->Form->end();	?>
 	
</div>