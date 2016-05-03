<?php
include('session.php');
?>

<!DOCTYPE html>

<head>

	<meta charset="utf-8">
	<title>SMAN 1 Tangerang</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="css/style.css">
	<link rel="stylesheet" media="all" href="css/bootstrap.css">
	<link rel="stylesheet" media="all" href="css/animate.css">
	<script src="tinymce/tinymce.min.js"></script>
  	<script>tinymce.init({ selector:'textarea' });</script>
</head>

<?php 
	if(!isset($_GET['content'])){
	  $vcontent = "personalprofile.php";
	}
	else{
	  $vcontent = $_GET['content'];
	}
	?>

<body>

	<header id="header">
		<div class="container">
			<a href="profile.php?content=<?php echo 'home.php' ?>" id="logo" title="SMAN1TANGERANG">SMAN 1 Tangerang</a>
			<div class="menu-trigger"></div>
			<nav id="menu">
				<ul>
					
					<li><a href="profile.php?content=<?php echo 'infoadmin.php' ?>">News</a></li>
					<li><a href="profile.php?content=<?php echo 'input.php' ?>">Input</a></li>
					<li><a href="profile.php?content=<?php echo 'logout.php' ?>" class="get-contact">Logout</a></li>
   				</ul>
   				
			</nav>
			<!-- / navigation -->
		</div>
		<!-- / container -->
	
	</header>
	<!-- / header -->
	
	<?php include $vcontent; ?>
	
	<footer id="footer">
		<div class="container">
			<section>
				<article class="col-1">
					<h3>Contact</h3>
					<ul>
						<li class="address"><a href="#">151 W Adams St<br>Tangerang, MI 48226</a></li>
						<li class="mail"><a href="#">contact@sman1tangerang.com</a></li>
						<li class="phone last"><a href="#">(971) 536 845 924</a></li>
					</ul>
				</article>
				
				<article class="col-3">
					<h3>Social media</h3>
					<p>This our media social you can contact.</p>
					<ul>
						<li class="facebook"><a href="#">Facebook</a></li>
						<li class="google-plus"><a href="#">Google+</a></li>
						<li class="twitter"><a href="#">Twitter</a></li>
						<li class="pinterest"><a href="#">Pinterest</a></li>
					</ul>
				</article>
				<article class="col-4">
					<h3>Newsletter</h3>
					<p>Do you have some to discuss about?</p>
					<form action="#">
						<input placeholder="Email address..." type="text">
						<button type="submit">Subscribe</button>
					</form>
					<ul>
						<li><a href="#"></a></li>
					</ul>
				</article>
			</section>
			<p class="copy">Copyright 2016 SMAN 1 Tangerang. All rights reserved.</p>
		</div>
		<!-- / container -->
	</footer>
	<!-- / footer -->

	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
