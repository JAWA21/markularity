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

	echo $this->Session->flash('auth');
	echo $this->Form->create('User');
?>

<div class="container">
	<div class="form-signin">
		<?php echo $this->Form->create('User'); ?>
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