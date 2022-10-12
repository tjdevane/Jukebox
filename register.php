<?php
	include "includes/config.php"; 
	include "includes/classes/Account.php";
	include "includes/classes/Constants.php";
	$account = new Account();
	

	include "includes/handlers/register-handler.php";
	include "includes/handlers/login-handler.php";

	function getInputValue($name){
		if(isset($_POST[$name])){
			echo $_POST[$name];
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome to Slotify</title>
</head>
<body>
	<div id="inputContainer">
		<form id="loginForm" action="register.php" method="POST">
			<h2>Login to your Account</h2>
			<p>
				<label for="loginUsername">Username</label>
				<input id="loginUsername" type="text" name="loginUsername" placeholder="e.g. bartSimpson" required>
			</p>
			<p>
				<label for="loginPassword">Password</label>
				<input id="loginPassword" type="password" name="loginPassword" placeholder="Your Password" required>
			</p>
			<button type="submit" name="loginButton">LOG IN</button>
						
		</form>

		<form id="registerForm" action="register.php" method="POST">
			<h2>Create your Account</h2>
			<p>
				<?php echo $account->getError(Constants::$userNameCharacters); ?>
				<label for="username">Username</label>
				<input id="username" type="text" name="username" placeholder="e.g. bartSimpson" value="<?php getInputValue('username') ?>" required>
			</p>
			<p>
				<?php echo $account->getError(Constants::$firstNameCharacters); ?>
				<label for="firstname">First Name</label>
				<input id="firstname" type="text" name="firstname" placeholder="e.g. Bart" value="<?php getInputValue('firstname') ?>" required>
			</p>
			<p>
				<?php echo $account->getError(Constants::$lastNameCharacters); ?>
				<label for="lastname">Last Name</label>
				<input id="lastname" type="text" name="lastname" placeholder="e.g. Simpson" value="<?php getInputValue('lastname') ?>" required>
			</p>
			<p>
				<?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
				<?php echo $account->getError(Constants::$emailInvalid); ?>
				<label for="email">Email</label>
				<input id="email" type="email" name="email" placeholder="e.g. bart@gmail.com" value="<?php getInputValue('email') ?>" required>
			</p>
			<p>
				<label for="email2">Confirm Eamil</label>
				<input id="email2" type="email2" name="email2" placeholder="e.g. bart@gmail.com" value="<?php getInputValue('email2') ?>" required>
			</p>
			<p>
				<?php echo $account->getError(Constants::$passwordsDoNotMatch); ?>
				<?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
				<?php echo $account->getError(Constants::$passwordCharacters); ?>
				<label for="password">Password</label>
				<input id="password" type="password" name="password" placeholder="Your Password" required>
			</p>
			<p>
				<label for="password2">Confirm Password</label>
				<input id="password2" type="password" name="password2" placeholder="Your Password" required>
			</p>
			<button type="submit" name="registerButton">SIGN UP</button>
						
		</form>
	</div>




</body>
</html>