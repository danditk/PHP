<!DOCTYPE HTML>

<html lang="pl">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Lekcja pierwsza PHP_L1 - Podsumowanie zamówienia</title>
	<meta name="autor" content="lesserr" />
	<meta name="description" content="Opis witryny" />
	<meta name="keywords" content="słowa kluczowe" />
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

<?php

	$paczek = $_POST['paczek'];
	$grzebien = $_POST['grzebien'];
	$sum = $paczek*0.99+$grzebien*1.29;

	echo<<<END
		<h2>Podsumowanie zamówienia</h2>
		<table border="1" cellpadding="10" cellspacing="0">
			<tr>
				<td>Pączek (0.99 PLN/szt)</td><td>$paczek</td>
			<tr>
			<tr>
				<td>Grzebień (1.29 PLN/szt)</td><td>$grzebien</td>
			<tr>
			<tr>
				<td>SUMA</td><td>$sum PLN</td>
			<tr>
		</table>

		<br>
	  <a href="index.php">Powrót do zamówienia</a>

END;


?>

</body>
</html>
