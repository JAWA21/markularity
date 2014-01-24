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
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$title_for_layout = "Markularity";

?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
	<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap.css');
		echo $this->Html->script('jquery');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>

	<div class="container">
		<nav class="navbar navbar-default" role="navigation">
			<a class="navbar-brand" href="#">Markularity</a>
			<form class="navbar-form navbar-right" role="search">
			  <div class="form-group">
			    <input type="text" class="form-control" placeholder="username">
			  </div>
			  <div class="form-group">
			    <input type="text" class="form-control" placeholder="password">
			  </div>
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>
		</nav>

		<div id="content">

		 <?php echo $this->Session->flash(); ?>

		 <?php echo $this->fetch('content'); ?>

		</div>
		<? echo 'testing, layouts/default.ctp'; ?>
	</div>
<?echo $this->Js->writeBuffer();?>
</body>
</html>