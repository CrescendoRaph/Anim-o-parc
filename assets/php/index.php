<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
	<link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>

<body>

	<a href="index.html">
		<img src="images/logo_animo.png.png" height="100px" width="100px" id="logo" alt="Logo"/>
	</a>

	<div class="container">
		<form action="/assets/php/contact.php" method="POST">
			<div class="contact-box">
				<div class="left"></div>
				<div class="right">
					<h2>Contact Us</h2>
					<input type="text" name="surname" class="field" placeholder="Votre Nom">
                    <input type="text" name="firstname" class="field" placeholder="Prenom">
					<input type="email" name="email" class="field" placeholder="Votre Email">
					<textarea placeholder="Votre Message" name="message" class="field"></textarea>
					<button type="submit" class="btn">Send</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>