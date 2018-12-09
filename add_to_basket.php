<?php

session_start();

$basket = unserialize(file_get_contents('./private/orderdb.csv'));
$products = unserialize(file_get_contents('./private/items.csv'));
$found = 0;
$count = 0;
foreach ($basket as $row) {
	if ($row['name'] === $products[$_GET['key']-1]['name']) {
		$found = 1;
		break ;
	}
	$count++;
}
if ($found === 0) {
	$row['name'] = $products[$_GET['key']-1]['name'];
	$row['price'] = $products[$_GET['key']-1]['price'];
	$row['quantity'] = 1;
	$basket[] = $row;
}
else {
	$basket[$count]['price'] += $products[$_GET['key']-1]['price'];
	$basket[$count]['quantity'] += 1;
}
file_put_contents('./private/orderdb.csv', serialize($basket));
file_put_contents('./private/items.csv', serialize($products));


header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
