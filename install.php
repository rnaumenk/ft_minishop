<?php
// DB directory
if (!file_exists("./private"))
	mkdir("./private");
// Users
if (!file_exists("./private/users.csv"))
	file_put_contents("./private/users.csv", serialize(array()));
// Passwords
if (!file_exists("./private/passwd.csv"))
	file_put_contents("./private/passwd.csv", '');
// Itemsdb
if (!file_exists("./private/items.csv")) {
	file_put_contents("./private/items.csv", '');
	$products = unserialize(file_get_contents('./private/items.csv'));
	$item1['name'] = "Hoody1";
	$item1['photo'] = base64_encode('http://kotbolki.ru/upload/thumb/images/eaad2e5j12b_320x0.jpg');
	$item1['price'] = 1500;
	$item1['category'] = "men";
	$item1['stock'] = "in_stock";
	$item2['name'] = "Hoody2";
	$item2['photo'] = base64_encode('http://kotbolki.ru/upload/images/2bbde9.jpg');
	$item2['price'] = 1000;
	$item2['category'] = "unisex";
	$item2['stock'] = "in_stock";
	$item3['name'] = "Hoody3";
	$item3['photo'] = base64_encode('http://kotbolki.ru/upload/images/0d93b.jpg');
	$item3['price'] = 1000;
	$item3['category'] = "unisex";
	$item3['stock'] = "in_stock";
	$item4['name'] = "Hoody4";
	$item4['photo'] = base64_encode('http://kotbolki.ru/upload/images/d7c9b.jpg');
	$item4['price'] = 1100;
	$item4['category'] = "women";
	$item4['stock'] = "in_stock";
	$item5['name'] = "Hoody5";
	$item5['photo'] = base64_encode('http://kotbolki.ru/upload/images/ea25f.jpg');
	$item5['price'] = 1300;
	$item5['category'] = "women";
	$item5['stock'] = "in_stock";
	$item6['name'] = "Hoody6";
	$item6['photo'] = base64_encode('http://kotbolki.ru/upload/images/4163d3fe.jpg');
	$item6['price'] = 1200;
	$item6['category'] = "men";
	$item6['stock'] = "";
	$products[] = $item1;
	$products[] = $item2;
	$products[] = $item3;
	$products[] = $item4;
	$products[] = $item5;
	$products[] = $item6;
	file_put_contents('./private/items.csv', serialize($products));
}
// Orders of user
if (!file_exists("./private/orderdb.csv")) {
	file_put_contents("./private/orderdb.csv", '');
}

















// // Curent users carts
// if (!file_exists("./private/cart.csv"))
// {
// 	file_put_contents("./private/cart.csv", serialize(array()));
// }

?>