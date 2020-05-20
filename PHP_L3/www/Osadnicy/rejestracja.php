<?php
	session_start();

	if (isset($_POST['email'])){
		// Udana walidacja? Załużmy że tak!
		$wszystko_OK = true;

		//Sprawdz poprawność login'u
		$login = $_POST['login'];

		//Sprawdzenie długości login'u
		if ((strlen($login)<3) || (strlen($login)>20)){
			$wszystko_OK = false;
			$_SESION['e_login'] = "Login powinien zawierać od 3 do 20 znaków";
		}

		//Sprawdzanie czy login ma poprawne znaki
		if (ctype_alnum($login)==false){
			$wszystko_OK = false;
			$_SESION['e_login'] = "Login powinien składać się wyłącznie z cyfr oraz<br/>wielkich i małych liter bez polskich znaków";
		}

		//Sprawdzenie czy to e-mail
		$email = $_POST['email'];
		$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);

		if ((filter_var($email, FILTER_VALIDATE_EMAIL) == false) || ($emailB != $email)){
			$wszystko_OK = false;
			$_SESION['e_email'] = "Nieprawidłowy e-mail, wprowadź poprawny mail";
		}

		//Sprawdzanie poprawności hasła
		$password1 = $_POST['haslo1'];
		$passwprd2 = $_POST['haslo2'];

		//Sprawdzanie długości
		if ((strlen($password1) < 8) || (strlen($password1) > 20)) {
			$wszystko_OK = false;
			$_SESION['e_haslo'] = "Hasło powinno zawierać w sobie od 8 do 20 znaków ";
		}

		//Jeśli hasła są od siebie różne
		if ($password1 != $passwprd2) {
			$wszystko_OK = false;
			$_SESION['e_haslo'] = "Podane hasła nie są takie same, spróbuj ponownie";
		}

		//Jeśli wszystko jest poprawnie
		if ($wszystko_OK == true){
			//Hurra, wszystkie testy zaliczone, dodajemy gracza do bazy
			echo "Udana walidacja"; exit();
		}
	}

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
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

	<style media="screen">
		.error{
			color: red;
			margin: 10px 0;
		}
	</style>

</head>
<body>
	<br>
	<form method="post">

		<label for="login">
			<b>Twój login: </b>
		</label>
		<br>
		<input type="text" name="login">

		<?php

			if (isset($_SESION['e_login'])){
				echo '<div class="error">'.$_SESION['e_login'].'</div>';
				unset($_SESION['e_login']);
			}

		?>
		<br>

		<label for="email">
			<b>Twój e-mail: </b>
		</label>
		<br>
		<input type="email" name="email">

		<?php

				if (isset($_SESION['e_email'])){
					echo '<div class="error">'.$_SESION['e_email'].'</div>';
					unset($_SESION['e_email']);
				}
		?>
		<br>

		<label for="haslo1">
			<b>Twoje hasło: </b>
		</label>
		<br>
		<input type="password" name="haslo1">
		<br>

		<label for="haslo2">
			<b>Powtórz hasło: </b>
		</label>
		<br>
		<input type="password" name="haslo2">
		<br>

		<?php

			if (isset($_SESION['e_haslo'])) {
				echo '<div class="error">'.$_SESION['e_haslo'].'</div>';
				unset($_SESION['e_haslo']);
			}

		?>

		<label>
			<input type="checkbox" name="regulamin"> Akceptuje regulamin
		</label>
		<br>

		<div class="g-recaptcha" data-sitekey="6LfVRvkUAAAAACDzvAKi_yDq-BSpbpAgoSthq4eK
"></div>
    <br/>

		<label>
			<input type="submit" name="" value="Zarejestruj się">
		</label>
	</form>

</body>

</html>
