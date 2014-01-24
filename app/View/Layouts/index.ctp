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
<?
$title_for_layout = "Markularity";
?>

<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php 
			echo $title_for_layout;
			echo $this->Html->script('bootstrap.js');?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap.css');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>

	<div class="container">
		<br>
		<nav class="navbar navbar-default" role="navigation">
			<a class="navbar-brand" href="#">Markularity</a>
			<form class="navbar-form navbar-left" role="register">
				<button type="submit" class="btn btn-primary">Register</button>
			</form>
			<form class="navbar-form navbar-right" role="login">
			  <div class="form-group">
			    <input type="text" class="form-control" placeholder="username">
			  </div>
			  <div class="form-group">
			    <input type="password" class="form-control" placeholder="password">
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
			<br>
		</nav>

		<div id="content">

		 <?php echo $this->fetch('content'); ?>

		</div>
	</div>
<?echo $this->Js->writeBuffer();?>
<?php echo $this->Session->flash(); ?>
    <script src="https://code.jquery.com/jquery.js"></script>
</body>
</html>





















