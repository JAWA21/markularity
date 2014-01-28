<!-- ************************
*
* Register View
* File Location: app/View/Users/add.ctp 
*
************************ -->

<!-- <h2>User Registration</h2> -->

<?php
$options = array(
	'label' => 'Submit',
	'div' => 'form-group',
	'class' => 'btn btn-lg btn-primary btn-block'
);
?>

<div class="container">
	<div class="form-signin">
		<h2 class="form-signin-heading centered">User Registration</h2>
		<?php echo $this->Form->create('User', array('action' => 'add')); ?>
		<div class="form-group">
			<?php echo $this->Form->input('firstname', array('label' => 'First Name', 'id' => 'firstname','class'=>'form-control','autofocus'=>'autofocus')); ?>
		</div>
		<div class="form-group">
			<?php echo $this->Form->input('lastname', array('label' => 'Last Name', 'id' => 'lastname','class'=>'form-control')); ?>
		</div>
		<div class="form-group">
			<?php echo $this->Form->input('username', array('label' => 'Username', 'id' => 'username','class'=>'form-control')); ?>
		</div>
		<div class="form-group">
			<?php echo $this->Form->input('password', array('label' => 'Password', 'id' => 'password','class'=>'form-control')); ?>
		</div>
	<?php echo $this->Form->hidden('role', array('value' => 'author'));?>
	<input type="submit" id="regis_btn" class="btn btn-lg btn-primary btn-block" value="Register">
	<?php echo $this->Form->end();?>
	</div>
</div>