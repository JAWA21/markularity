<!-- ************************
*
* Login View
* File Location: app/View/Users/login.ctp 
*
************************ -->

<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('Users'); ?>

<h2>User Login</h2>
<?php echo '<small>Please enter your username and password</small><br>'; ?>
<?php echo '<small>Your username is the email address used when you registered.</small>' ?>

<?php 
	echo $this->Form->input('username', array('label' => 'Username', 'id' => 'username'));
	echo $this->Form->input('password', array('label' => 'Password', 'id' => 'password'));
?>

<?php echo $this->Form->end(__('Login')); ?>