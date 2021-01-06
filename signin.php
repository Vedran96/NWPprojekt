<?php 
$MySQL = mysqli_connect("localhost","root","","database") or die('Error connecting to MySQL server.');
	print '
	<!DOCTYPE html>
<html>
	<head>
		
		<!-- CSS -->
		<link rel="stylesheet" href="style.css">
		<!-- End CSS -->
		<!-- meta elements -->
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="description" content="some description">
        <meta name="keywords" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
		
		<!-- Schema.org markup for Google+ -->
		<meta itemprop="name" content="Hello Example">
		<meta itemprop="description" content="Some description">
		<meta itemprop="image" content="Your URL"> 
		
		<!-- Open Graph data -->
		<meta property="og:title" content="Hello Example">
		<meta property="og:type" content="article">
		<meta property="og:url" content="Your URL">
		<meta property="og:image" content="Your URL">
		<meta property="og:description" content="Some description">
		<meta property="article:tag" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
		
		<!-- Twitter Card data -->
		<meta name="twitter:title" content="Hello Example">
		<meta name="twitter:description" content="Some description">
		
        <meta name="author" content="vedranmihalic96@gmail.com">
		<!-- favicon meta -->
		<link rel="icon" href="img/icon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" href="img/icon.ico" type="image/x-icon"/>
		<!-- end favicon meta -->
		<!-- end meta elements -->
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
		<!-- End Google Fonts -->
		<title>Prijava</title>
	</head>
<body>
	<header>
	<html>
	<header>
	<div class="hero-image"></div>
	<nav>
		<ul>
		  <li><a href="index.php">Početna</a></li>
		  <li><a href="news.html">Vijesti</a></li>
		  <li><a href="contact.php">Kontakt</a></li>
		  <li><a href="about-us.php">O nama</a></li>
		  <li><a href="register.php">Registracija</a></li>
		  <li><a href="signin.php">Prijava</a></li>
		  
		</ul>
		</nav>
	</header>
	<main>';

	
	print '
	<h1>Sign In form</h1>
	<div id="signin">';
	
	if ($_POST == FALSE) {
		print '
		<form action="" name="myForm" id="myForm" method="POST">
			<input type="hidden" id="_action_" name="_action_" value="TRUE">
			<label for="username">Username:*</label>
			<input type="text" id="username" name="username" value="" pattern=".{5,10}" required>
									
			<label for="password">Password:*</label>
			<input type="password" id="password" name="password" value="" pattern=".{4,}" required>
									
			<input type="submit" value="Submit">
		</form>';
	}
	else if ($_POST['_action_'] == TRUE) {
		
		$query  = "SELECT * FROM users";
		$query .= " WHERE username='" .  $_POST['username'] . "'";
		$query .= " AND archive='N'";
		$result = @mysqli_query($MySQL, $query);
		$row = @mysqli_fetch_array($result, MYSQLI_ASSOC);
		
		if (password_verify($_POST['password'], $row['password'])) {
			#password_verify https://secure.php.net/manual/en/function.password-verify.php
			$_SESSION['user']['valid'] = 'true';
			$_SESSION['user']['id'] = $row['id'];
			$_SESSION['user']['firstname'] = $row['firstname'];
			$_SESSION['user']['lastname'] = $row['lastname'];
			$_SESSION['message'] = '<p>Dobrodošli, ' . $_SESSION['user']['firstname'] . ' ' . $_SESSION['user']['lastname'] . '</p>';
			# Redirect to admin website
			header("Location: index.php?menu=7");
		}
		
		# Bad username or password
		else {
			unset($_SESSION['user']);
			$_SESSION['message'] = '<p>You entered wrong email or password!</p>';
			header("Location: index.php?menu=6");
		}
	}
	print '
	</main>
	<footer>
		<p>Copyright &copy; 2021 Vedran Mihalić. <a href="https://github.com/Vedran96?tab=repositories"><img src="img/GitHub-Mark-Light-32px.png" title="Github" alt="Github"></a></p>
	</footer>
	</div>
	</body>
</html>';
?>