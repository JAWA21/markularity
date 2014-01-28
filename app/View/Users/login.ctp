<!-- ************************
*
* Login View
* File Location: app/View/Users/login.ctp 
*
************************ -->

<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>

<h2>User Login</h2>
<?php echo '<small>Please enter your username and password</small><br>'; ?>

<?php 
	echo $this->Form->input('username', array('label' => 'Username', 'id' => 'username','class'=>'form-control'));
	echo $this->Form->input('password', array('label' => 'Password', 'id' => 'password','class'=>'form-control'));
?>
<input type="submit" class=" submit btn btn-lg btn-primary btn-block" value="Login">
<?php echo $this->Form->end(); ?>