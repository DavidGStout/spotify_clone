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

		<form id="registerForm" action="register.php" method="POST">
			<h2>Create your free account</h2>
			<label for="username">Username</label>
			<input id="username" type="text" name="username" placeholder="Username" required></br>

			<label for="firstName">First Name</label>
			<input id="firstName" type="text" name="firstName" placeholder="First Name" required></br>

			<label for="lastName">Last Name</label>
			<input id="lastName" type="text" name="lastName" placeholder="Last Name" required></br>

			<label for="email">Email</label>
			<input id="email" type="email" name="email" placeholder="Email" required></br>

			<label for="email2">Confirm Email</label>
			<input id="email2" type="email" name="email2" placeholder="Confirm Email" required></br>


			<label for="password">Password</label>
			<input id="password" type="password" name="password" required></br>

			<label for="password2">Confirm Password</label>
			<input id="password2" type="password" name="password2" required>
		</br>



			<button type="submit" name="loginButton">Sign Up</button>
		</form>


	</div>
</body>
</html>