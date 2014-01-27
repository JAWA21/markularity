<?php
$title_for_layout = "Markularity";
?>
<!DOCTYPE html>
<html>
	<head>
		<?php echo $this -> Html -> charset(); ?>
		<title><?php echo $title_for_layout; ?></title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<?php
		echo $this -> Html -> meta('icon');

		echo $this -> Html -> script('bootstrap.js');

		echo $this -> Html -> css(array('bootstrap.css','signin.css'));

		echo $this -> fetch('meta');
		echo $this -> fetch('css');
		echo $this -> fetch('script');
		?>
	</head>
	<body>

		<div class="container">
			
			<br />
			
			<nav class="navbar navbar-default" role="navigation">
				<a class="navbar-brand" href="/">Markularity</a>
				<div class="navbar-form navbar-right" role="register">
					<a href="/users/add" class="btn btn-primary">Register</a>
					<a href="/users/login" class="btn btn-primary">Login</a>
				</div>
				<br>
			</nav>

	        <div class="content-wrapper">
	            <?php echo $this -> fetch('content'); ?>
	        </div>

		</div>
		
		<?echo $this -> Js -> writeBuffer(); ?>
		<?php echo $this -> Session -> flash(); ?>
		
	</body>
</html>