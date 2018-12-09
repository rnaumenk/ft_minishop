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
	<form id='register-form' method='post' action="create.php">
		<input required type="text" name="login" value="" placeholder="Login"><br />
		<input required type="password" name="passwd" value="" placeholder="Password"><br />
		<label id="button">
	        <input type="submit" name="submit" value="Register"/>
		</label>
	</form>
</div>
</body>
</html>
