<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<style>
		form {
			margin: 0 auto;
			width: 300px;
		}
		input {
			margin-bottom: 3px;
			padding: 10px;
			width: 100%;
			border: 1px solid #CCC;
		}
		#button {
			padding:10px;
		}
		body {
			background-color: grey;
		}
	</style>
</head>
<body >
<div align="center" style="margin-top: 20%;">
	<form id='login-form' method='get' action="login.php">
		<label>
			<span>Login</span>
			<input required type="text" name="login" value="<?php echo $_SESSION['login']; ?>"><br />
		</label>
		<label>
			<span>Password</span>
			<input required type="password" name="passwd" value="<?php echo $_SESSION['passwd']; ?>"><br />
		</label>
		<label id="button">
	        <input type="submit" name="submit" value="OK"/>
		</label>
	</form>
</div>
</body>
</html>