<!DOCTYPE HTML>

<html lang="pl">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Lekcja pierwsza PHP_L1 - Zamówienie</title>
	<meta name="autor" content="lesserr" />
	<meta name="description" content="Opis witryny" />
	<meta name="keywords" content="słowa kluczowe" />
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

<?php

	$name = "Elżbieta";

	echo "Witaj ".$name. "!";

?>

	<h1>Zamówienie online</h1>
	<form class="zamowienie" action="order.php" method="post">
		<label for="paczki">Ile pączków (0.99 PLN/szt):</label>
		<input type="text" name="paczek">
		<br><br>
		<label for="grzebienie">Ile grzebieni (1.29 PLN/szt):</label>
		<input type="text" name="grzebien">
		<br><br>
		<input type="submit" value="Wyślij Zamówienie">
	</form>

</body>
</html>
