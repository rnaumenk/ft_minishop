<?php


session_start();
$_SESSION['loggued_on_user'] = '';
file_put_contents("./private/orderdb.csv", '');
header("Location: ./start.php");


?>
