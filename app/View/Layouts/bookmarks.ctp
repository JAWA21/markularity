<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$title_for_layout = "Markularity";

?>
<!DOCTYPE html>
<html>
<head>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<?php echo $this->Html->charset();
		  echo $this->Html->script('bootstrap.js');
	?>
	<title>
		<?php 
			echo $title_for_layout;
		?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css(array('signin.css','bootstrap.css'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body style='padding-top:0px;'>

	<div class="container">
		<br>
		<nav class="navbar navbar-default" role="navigation">
			<a class="navbar-brand" href="/index.php">Markularity</a>
			<form class="navbar-form navbar-right" role="register">
				<a href="/users/add" class="btn btn-primary">Register</a>
				<a href="/users/login" class="btn btn-primary">Login</a>
			</form>
			<br>
		</nav>

		<div id="content">

		 <?php echo $this->fetch('content');?>



		</div>
	</div>
<?echo $this->Js->writeBuffer();?>
<?php echo $this->Session->flash(); ?>
</body>
</html>