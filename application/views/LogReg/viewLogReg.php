<?php 
// unset($this->session->userdata); 
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Login and Registration</title>
	</head>
	<body>
		<div id='container'>
			<div id='Login'>
				<form action="/loginForm" method="post">
					<h2>Login</h2>
					<input type="hidden" name="action" value="login" />
					<label>Email:</label>
					<input type="text" name="email" />
					<label>Password:</label>
					<input type="password" name="password" />
					<input type="submit" value="Login" />
				</form>
				<?=  $this->session->flashdata('loginError'); ?>

			</div>
			<div id='Registration'>
				<form action="/registrationForm" method="post">
					<h2>Registration</h2>
					<input type="hidden" name="action" value="registration" />
					<label>First Name:</label>
					<input type="text" name="first_name" />
					<label>Last Name:</label>
					<input type="text" name="last_name" />
					<label>Email:</label>
					<input type="text" name="email" />
					<label>Password:</label>
					<input type="password" name="password" />
					<label>Confirm Password:</label>
					<input type="password" name="confirm_password" />
					<p>*Password should be atleast 8 characters</p>
					<label>Date of Birth:</label>
					<input type="date" name="birthdate" />
					<input type="submit" value="Register" />
				</form>	
				<?=  $this->session->flashdata('registrationError'); ?>
			</div>
		</div>
	</body>
</html>