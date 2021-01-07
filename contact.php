<!DOCTYPE html>
<html>
<head>
		
		<title>Kontakt</title>
	</head>
<body>
	
	
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
			<textarea id="subject" name="subject" placeholder="Unesite poruki.." style="height:200px"></textarea>
			<input type="submit" value="Submit">
		</form>
	</div>
</div>
	</main>
	
</body>
</html>

