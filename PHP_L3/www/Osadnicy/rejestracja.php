<?php
	session_start();


?>

<!DOCTYPE HTML>

<html lang="pl">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Osadnicy - załuż darmowe konto!</title>
	<meta name="autor" content="lesserr" />
	<meta name="description" content="Opis witryny" />
	<meta name="keywords" content="słowa kluczowe" />
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
	<br>
	<form method="post">
		<label for="login">
			<b>Twój login: </b>
		</label>
		<br>
		<input type="text" name="login">
		<br><br>
		<label for="email">
			<b>Twój e-mail: </b>
		</label>
		<br>
		<input type="email" name="email">
		<br><br>
		<label for="haslo1">
			<b>Twoje hasło: </b>
		</label>
		<br>
		<input type="password" name="haslo1">
		<br><br>
		<label for="haslo2">
			<b>Powtórz hasło: </b>
		</label>
		<br>
		<input type="password" name="haslo2">
		<br><br>
		<label>
			<input type="checkbox" name="regulamin"> Akceptuje regulamin
		</label>
		<br><br>
		<label>
			<input type="submit" name="" value="Potwierdź">
		</label>
	</form>

</body>

</html>
