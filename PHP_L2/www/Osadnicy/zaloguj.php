<?php

	require_once "connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

	if($polaczenie->connect_errno!=0){
		echo "Error: ".$polaczenie->connect_errno . " " . "Opis: ".$polaczenie->connect_error;
		// . " " . "Opis: ".$polaczenie->connect_error
	}
	else {
		$login = $_POST['login'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM uzytkownicy WHERE user='$login' AND pass='$password'";

		if($rezultat = @$polaczenie->query($sql)){
			$ilu_userow = $rezultat->num_rows;
			if($ilu_userow>0) {
				$row = $rezultat->fetch_assoc();
				$user = $row['user'];

				echo $user;

				$rezultat->close();
			} else {
				// code...
			}
		}

		$polaczenie->close();
	}

 ?>
