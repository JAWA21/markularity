<!-- ************************
*
* Login View
* File Location: app/View/Users/login.ctp 
*
************************ -->

<?php
$options = array(
	'label' => 'Login',
	'div' => 'form-group',
	'class' => 'btn btn-lg btn-primary btn-block'
);

<<<<<<< HEAD
<h2>User Login</h2>
<?php echo '<small>Please enter your username and password</small><br>'; ?>

<?php 
	echo $this->Form->input('username', array('label' => 'Username', 'id' => 'username','class'=>'form-control'));
	echo $this->Form->input('password', array('label' => 'Password', 'id' => 'password','class'=>'form-control'));
?>
<input type="submit" class=" submit btn btn-lg btn-primary btn-block" value="Login">
<?php echo $this->Form->end(); ?>
=======
	echo $this->Session->flash('auth');
	echo $this->Form->create('User');
?>

<div class="container">
	<div class="form-signin">
		<div class="centered">
			<h2>User Login</h2>
			<?php echo '<small>Please enter your username and password</small><br>'; ?>
			<?php echo '<small>Your username is the email address used when you registered.</small><br><br>'; ?>
		</div>
		<div class="form-group">
			<?php echo $this->Form->input('username', array('label' => 'Username', 'id' => 'username','class'=>'form-control','autofocus'=>'autofocus')); ?>
		</div>
		<div class="form-group">
			<?php echo $this->Form->input('password', array('label' => 'Password', 'id' => 'password','class'=>'form-control')); ?>
		</div>
	<?php echo $this->Form->end($options);?>
	</div>
</div>
>>>>>>> 1e915238cee5ec0c5b4d6c047661f9c26d3adc73
