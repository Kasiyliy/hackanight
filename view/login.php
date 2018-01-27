<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<?php include_once(DIRNAME.'view/template/external.php'); ?>
</head>
<body>

<h1>Login</h1>

<form method="POST">
	<input type="text" name="login" placeholder="Login">
	<input type="password" name="password" placeholder="Password">
	<button type="submit" name="login">Login</button>
</form>

</body>
</html>