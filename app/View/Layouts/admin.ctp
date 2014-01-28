<?php
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$title_for_layout = "Markularity";
?>
<!DOCTYPE html>
<html>
	<head>
		<?php echo $this -> Html -> charset(); ?>
		<title>Administrator | <?php echo $title_for_layout; ?></title>
	    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<?php
		echo $this -> Html -> meta('icon');

		echo $this -> Html -> script('bootstrap.js');

		echo $this -> Html -> css('bootstrap.css');

		echo $this -> fetch('meta');
		echo $this -> fetch('css');
		echo $this -> fetch('script');
		?>
	</head>
	<body>
		
	    <div class="container">
	    		        
	       <nav class="navbar navbar-default" role="navigation">
				<a class="navbar-brand" href="/">Markularity</a>
				<div class="navbar-form navbar-right" role="register">
					<a href="/logout" class="btn btn-primary">Logout</a>
				</div>
				<br>
			</nav>
	        
	        <div id="content-wrapper">
	            <?php echo $this -> fetch('content'); ?>
	        </div>
	 
	        <div id="footer">
	            © <?php echo date("Y"); ?> - All rights          
	    	</div>
	    	
	         <?php echo $this -> element('sql_dump'); ?>  
	           
	    </div>
	 
	</body>
</html>
