<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Music Player</title>
</head>
<body>
	<div id="inputContainer">
		<form id="loginForm" action="register.php" method="POST">
			<h2>Login to your account</h2>
			<label for="loginUsername">Username</label>
			<input id="loginUsername" type="text" name="loginUsername" placeholder="Username" required></br>
			<label for="loginPassword">Password</label>
			<input id="loginPassword" type="password" name="loginPassword" required>
			<button type="submit" name="loginButton">Login</button>
		</form>
	</div>
</body>
</html>