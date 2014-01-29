<?php
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$title_for_layout = "Markularity";
$username = $this->Session->read('username');

?>
<!DOCTYPE html>
<html>
	<head>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<?php echo $this -> Html -> charset(); ?>

		<title>Add | <?php echo $title_for_layout; ?></title>

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
		<br>
			<div class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					<a class="navbar-brand" href="/">Markularity</a>
				</div>
				
				<div class="collapse navbar-collapse">
					<div class="form-group">
						<button onClick='moveTo();' type="submit" class="btn btn-primary navbar-btn navbar-right">Log Out</button>
						<script>function moveTo(){ location.href='/logout'; }</script>
						
						<p class="navbar-text">Welcome <a href="/bookmarks"><?= $username?></a></p>
					</div>
				</div>
			</div>
	       
	        <div id="content-wrapper">
	        	<br>
	            <?php echo $this -> fetch('content'); ?>
	        </div>
	 
	         <?php echo $this -> element('sql_dump'); ?>  
	           
	    </div>
	 
	</body>
</html>
