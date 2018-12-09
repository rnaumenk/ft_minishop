<?php

session_start();

$products = unserialize(file_get_contents('./private/items.csv'));
$products[$_GET['key']-1]['stock'] = "in_stock";
file_put_contents('./private/items.csv', serialize($products));
$_SESSION['loggued_on_user'] = 'Admin';
header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
