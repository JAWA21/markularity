<!-- File Location: app/View/Users/login.ctp -->

	<?php echo $this->Session->flash('auth'); ?>
	<?php echo $this->Form->create('Users', array('action' => 'login')); ?>
   	<h2>User Login</h2>
        	<?php 
        		echo $this->Form->input('email', array('label' => 'Email Address', 'id' => 'email'));
        		echo $this->Form->input('password', array('label' => 'Password', 'id' => 'password'));
    	?>
	<?php echo $this->Form->end(__('Login')); ?>
