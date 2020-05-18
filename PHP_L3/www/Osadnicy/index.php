<?php
	session_start();

	if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] = true){
		header('Location: gra.php');
		exit();
	}

?>

<!DOCTYPE HTML>

<html lang="pl">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Osadnicy - gra przeglądarkowa</title>
	<meta name="autor" content="lesserr" />
	<meta name="description" content="Opis witryny" />
	<meta name="keywords" content="słowa kluczowe" />
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
  <h1>Tylko martwi ujrzeli koniec wojny - Platon</h1><br><br>

	<a href="rejestracja.php">Załuż konto</a><br><br>

  <form class="" action="zaloguj.php" method="post">
    Login: <br> <input type="text" name="login"><br><br>
    Hasło: <br> <input type="password" name="password"><br><br>
    <input type="submit" value="Zaloguj">
  </form>

<?php
	if(isset($_SESSION['bladlogowania'])) echo $_SESSION['bladlogowania'];
?>

</body>

</html>
