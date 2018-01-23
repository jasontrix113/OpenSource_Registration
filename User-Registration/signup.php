
<html>
	<header>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>	
	</header>
	<body>
		<div class="container">
			<div class="panel panel-default col-sm-8" style="margin-top: 20px;">
					
				<div class="signup-form">
					<form action="signup-query.php" method="post" class="form" role="login-form">
						<div class="panel-header">
							<h3>Account Information</h3>
						</div>
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" class="form-control" name="username" id="username" required>
						</div>
						<div class="form-group">
							<label for="emailaddress">Email Address</label>
							<input type="email" class="form-control" name="email" id="emailaddress" required>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" name="password" id="password" required>
						</div>
						<div class="form-group">
							<label for="password">Confirm Password</label>
							<input type="password" class="form-control" name="cpassword" id="cpassword" required>
						</div>
						<div class="panel-header">
							<h3>User Information</h3>
						</div>
						<div class="form-group">
							<label for="firstname">First Name</label>
							<input type="text" name="firstname" class="form-control">
						</div>
						<div class="form-group">
							<label for="lastname">Last Name</label>
							<input type="text" name="lastname" class="form-control">
						</div>
						<div class="form-group">
							<label for="lastname">Contact Number</label>
							<input type="text" name="contactnumber" class="form-control">
						</div>
						<div class="form-group">
							<label for="lastname">Address</label>
							<textarea  name="address" id="address" class="form-control"></textarea> 
						</div>
						<div class="form-group">
							<label for="lastname">City</label>
							<input type="text" name="city" class="form-control">
						</div>
						<div class="form-group">
							<label for="lastname">State</label>
							<input type="text" name="state" class="form-control">
						</div>
						<div class="form-group">
							<label for="lastname">Zip</label>
							<input type="text" name="zip" class="form-control">
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-info" value="Signup" id="signup-button">
						</div>
						<br>
						<div class="form-group">
							<p> Already have an account? <a href="login.php">Login</a></p>
						</div>	
					</form>
				</div>	
					
		</div>
	</body>
</html>