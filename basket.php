<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		body {
			background-color: grey;
		}
		/*button {
			margin: 30vh auto;
		}
		table {
			margin: 30vh auto;
			border-radius: 10px;
			box-shadow: 15px 15px 15px;
		}*/
		td, th {
			width: 5vw;
			height: 3vw;
		}
		th {
			background-color: #FF6347;
			font-size: 30px;
		}
		td {
			background-color: green;
			font-size: 22px;
		}
	</style>
</head>
<body>
	<div style="display: flex; flex-direction: column; align-items: center; margin-top: 30vh;">
		<table border="2px solid black" cellspacing="0">
			<thead>
				<tr>
					<th align="center">Name</th>
					<th align="center">Total Price</th>
					<th align="center">Quantity</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$basket = unserialize(file_get_contents('./private/orderdb.csv'));
				foreach ($basket as $key => $value) {
					$name = $value['name'];
					$price = $value['price'];
					$quantity = $value['quantity'];
					?>
					<tr>
						<td align="center"><?php echo $name ?></td>
						<td align="center"><?php echo $price ?></td>
						<td align="center"><?php echo $quantity ?></td>
					</tr>
					<?php
				}
				file_put_contents('./private/orderdb.csv', serialize($basket));
				?>
			</tbody>
		</table>
		<form action="log_check.php" method="get">
				<button type="submit" name="BUY" title="BUY"/>MAKE A PURCHASE</button>
		</form>
	</div>
</body></html>
