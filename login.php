<!DOCTYPE html>
<html>
<head>
	<!--Tab name-->
	<title>Login Page</title>

	<!--Bootstrap style sheet -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!--Personal style sheet for this page-->
	<link rel="stylesheet" type="text/css" href="style.css" >

</head>
<body>

	<div class = "container">
		<div class="login-box">
			<div class="row">
				<div class="row-md-6 login-left">
					<h2>Login Section</h2>
					<form action="validate.php" method="POST">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control" required>
						</div>
						<button type="submit" class="btn btn-primary">Login</button>
					</form>
				</div>
				<div class="row-md-6 login-right">
					<h2>Registration Section</h2>
					<form action="register.php" method="POST">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control" required>
						</div>
						<button type="submit" class="btn btn-primary">Register</button>
					</form>
				</div>	
			</div>
		</div>
	</div>

</body>
</html>