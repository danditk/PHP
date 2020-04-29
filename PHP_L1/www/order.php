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

	echo "<h2>$paczek</h2>";
	echo "<h2>$grzebien</h2>";

?>

</body>
</html>
