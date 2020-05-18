<?php

	session_start();

	require_once "connect.php";

	if((!isset($_POST['login'])) || (!isset($_POST['password']))){
		header('Location: index.php');
		exit();
	}

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

	if($polaczenie->connect_errno!=0){
		echo "Error: ".$polaczenie->connect_errno . " " . "Opis: ".$polaczenie->connect_error;
		// . " " . "Opis: ".$polaczenie->connect_error
	}
	else {
		$login = $_POST['login'];
		$password = $_POST['password'];

		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
		$password = htmlentities($password, ENT_QUOTES, "UTF-8");

		if($rezultat = @$polaczenie->query(sprintf("SELECT * FROM uzytkownicy WHERE user='%s' AND pass='%s'",
		mysqli_real_escape_string($polaczenie,$login),
		mysqli_real_escape_string($polaczenie,$password)))){
			$ilu_userow = $rezultat->num_rows;
			if($ilu_userow>0) {

				$_SESSION['zalogowany'] = true;


				$row = $rezultat->fetch_assoc();

				$_SESSION['id'] = $row['id'];
				$_SESSION['user'] = $row['user'];
				$_SESSION['drewno'] = $row['drewno'];
				$_SESSION['kamien'] = $row['kamien'];
				$_SESSION['zboze'] = $row['zboze'];
				$_SESSION['dnipremium'] = $row['dnipremium'];
				$_SESSION['email'] = $row['email'];

				unset($_SESSION['bladlogowania']);
				$rezultat->close();

				header('Location: gra.php');

			} else {

				$_SESSION['bladlogowania'] = '<br><span style="color: red;">Nieprawidłowy login lub hasło<br>Spróbuj jeszcze raz.';

				header('Location: index.php');
			}
		}

		$polaczenie->close();
	}

 ?>