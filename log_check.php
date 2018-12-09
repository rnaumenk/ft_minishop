<?php

session_start();

if ($_SESSION['loggued_on_user'] != '')
{
	file_put_contents("./private/orderdb.csv", '');
	?>
	<body style="background-color: #87CEEB;">
		<div align="center" style="margin-top: 35vh;"><h1 style="font-weight: bold; font-size: 78px">GL HF</h1></div>	
	</body>
	<?php
}
else
	include "login.php";
?>
