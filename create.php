<?php

session_start();


if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] === "Register") {
	$acc = unserialize(file_get_contents('./private/passwd.csv'));
	if ($acc)
	{
		$acc_exists = 0;
		foreach ($acc as $ac => $value) {
			if ($value['login'] === $_POST['login'])
				$acc_exists = 1;
		}
	}
	if ($acc_exists)
	{
		?>
		<br><br><br><br>
		<div align="center"><span style="color: red; font-weight: bold; font-size: 48px;">USER EXISTS</span></div>
		<?php
		include "./register.php";
	}
	else {
		$temp['login'] = $_POST['login'];
		$temp['passwd'] = hash('whirlpool', $_POST['passwd']);
		$acc[] = $temp;
		$users = unserialize(file_get_contents('./private/users.csv'));
		$users[] = $temp['login'];
		file_put_contents('./private/users.csv', serialize($users));
		file_put_contents('./private/passwd.csv', serialize($acc));
		$_SESSION["loggued_on_user"] = $temp['login'];
		header('Location: ./start.php');
	}
}
else
	header('Location: ./register.php');
?>
