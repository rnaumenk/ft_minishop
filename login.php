
<?php

include "auth.php";

session_start();


$_SESSION['loggued_on_user'] = '';

if ($_GET['submit'] === "OK" && auth($_GET['login'], $_GET['passwd']) === TRUE)  {
	$_SESSION['loggued_on_user'] = $_GET['login'];
	header('Location: start.php');
}
else
	include "login_form.php";
?>
