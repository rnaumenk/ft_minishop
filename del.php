<?php

session_start();

if ($_GET['submit'] === "DEL YOUR ACCOUNT!") {
	$acc = unserialize(file_get_contents('./private/passwd.csv'));
	$count = 0;
	$found = 0;
	foreach ($acc as $ac => $value) {
		if ($value['login'] === $_SESSION['loggued_on_user']) {
			$found = 1;
			break ;
		}
		$count++;
	}
	if ($found === 1)
		unset($acc[$count]);
	file_put_contents('./private/passwd.csv', serialize($acc));
	include "logout.php";
}
?>