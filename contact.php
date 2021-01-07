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
		<title>Kontakt</title>
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
	<main>
		<h1>Kontakt</h1>
		<div id="contact">
			<iframe src="https://www.google.com/maps/embed?data=!3m1!4b1!4m5!3m4!1s0x4765d1a04ce79879:0x49324c2c60c96c2c!8m2!3d45.8114366!4d15.8738055" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
			
				<label for="fname">Ime *</label>
			<input type="text" id="fname" name="firstname" placeholder="Vaše ime.." required>
			
			<label for="lname">Prezime *</label>
			<input type="text" id="lname" name="lastname" placeholder="Vaše prezime.." required>
				
			<label for="email">E-mail adresa *</label>
			<input type="email" id="email" name="email" placeholder="Vaša e-mail adresa.." required>
			<label for="country">Država</label>
			<select id="country" name="country">
				<option value="">Odabrite državu</option>
				<option value="BE">Belgium</option>
				<option value="HR" selected>Croatia</option>
				<option value="LU">Luxembourg</option>
				<option value="HU">Hungary</option>
			</select>
			<label for="subject">Poruka</label>
			<textarea id="subject" name="subject" placeholder="Unesite poruku.." style="height:200px"></textarea>
			<input type="submit" value="Submit">
		</form>
	</div>
</div>
	</main>
	<footer>
	<p>Copyright &copy; 2021 Vedran Mihalić. <a href="https://github.com/Vedran96?tab=repositories"><img src="img/GitHub-Mark-Light-32px.png" title="Github" alt="Github"></a></p>
	</footer>
</body>
</html>

