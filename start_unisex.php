<?php

session_start();

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Site</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<header>
			<address class="address">
				<div>City: Kyiv</div>
				<div>Phone number:063-154-99-26</div>
			</address>
			<h1 class="heading">FT_MINISHOP</h1>
			<?php
				if ($_SESSION["loggued_on_user"] != "")
				{
					?>
					<div class="logged_on_user"><a id="ggg" href="del_templ.php">User :<span><?php echo $_SESSION["loggued_on_user"] ?></span></a></div>
	            	<div class="logout"><a href="./logout.php">Log out</a></li></div>
	            	<?php
				}
				else
				{
					?>
					<div class="login"><a href="./login.php">Log in</a></div>
	  				<div class="sign_up"><a href="./register.php">Sign up</a></div>
					<?php
				}
			?>
		</header>
		<main>
			<nav class="nav">
				<h2><strong>Categories</strong></h2>
					<ul>
						<li><a href="start_men.php">For men</a></li>
						<li><a href="start_women.php">For women</a></li>
						<li><a href="start_unisex.php">Unisex</a></li>
					</ul>
			</nav>
			<section class="products">
			<?php
				$products = unserialize(file_get_contents('./private/items.csv'));
				$count = 0;
				foreach ($products as $item) {
					if ($item['category'] === "unisex") {
					$count++;
					?>
					<div>
						<figure>
							<img width="300px" height="300px" src="<?php echo base64_decode($item['photo'])?>">
							<div style="display: flex; justify-content: space-between;">
								<div><span style="color: black; font-weight: bold;"><?php echo $item['name'] ?></span></div>
								<div><span style="color: green; font-weight: bold;"><?php echo $item['price'] ?> UAH</span></div>
							</div>
						</figure>
						<?php
							if ($item['stock'] === "in_stock") {
								?>
								<form action="add_to_basket.php" method="get">
									<div align="center">
										<input type="hidden" name='key' value="<?php echo $count; ?>">
										<button class="add" type="submit" name="add" title="Add to Basket"/>Add</button>
									</div>
								</form>
								<?php
							}
						?>
						<?php
						if ($item['stock'] !== "in_stock") {
							?>
							<div align="center"><span style="color:red;">OUT OF STOCK</span></div>
							<?php
							if ($_SESSION['loggued_on_user'] === "Admin") {
								?>
								<form action="add_to_stock.php" method="get">
									<div align="center">
										<input type="hidden" name='key' value="<?php echo $count; ?>">
										<button type="submit" name="add" title="Add to STOCK"/>Set as IN STOCK</button>
									</div>
								</form>
								<?php
							}
						}
						else {
							if ($_SESSION['loggued_on_user'] === "Admin") {
								?>
								<form action="del_from_stock.php" method="get">
									<div align="center">
										<input type="hidden" name='key' value="<?php echo $count; ?>">
										<button type="submit" name="del" title="Del from STOCK"/>Del from STOCK</button>
									</div>
								</form>
								<?php
							}
						}
						?>
						</div>
						<?php
					}
				}
			?>
			</section>
			<aside class="basket">
				<div>
					<a href="basket.php"><img width="100px" height="100px" src="https://www.thomann.de/pics/images/basket/emptyBasket.jpg" alt="Basket" title="Basket"></a>
				</div>
			</aside>
		</main>
		<hr>
		<footer>
			<div class="rights"><span>All rights reserved&copy;</span></div>
		</footer>
	</body>
</html>
