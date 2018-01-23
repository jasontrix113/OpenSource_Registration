<?php
	require 'connect.inc.php';

	$query = "SELECT * FROM `user`";
    $select_query = mysqli_query($con,$query);
    if(!empty ($_POST))
    {
            $userName = $_POST['username'];
            $passWord = $_POST['password'];
            $passmd5 = md5($passWord);
        while($row = mysqli_fetch_assoc($select_query))
        {
            if($row['username']==$userName && $row['password']==$passmd5)  
            {    
                header("location: index.php");
            }       
        }  
    }	
?>
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
			<div class="panel panel-default col-sm-6 col-md-offset-3" style="margin-top: 20px;">
				<div class="panel-header" style="margin-left: 15px;">
					<h1>Login</h1>
				</div>

				<div class="panel-body login-form">
					<form action="" method="post" role="login-form">
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" class="form-control" name="username" id="username" required>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" name="password" id="password" required>
						</div>
						<br>
						<div class="form-group">
							<input type="submit" class="btn btn-success btn-block" value="Login" id="login-button">
						</div>
						<br>
						<div class="form-group">
							<p> Don't have an account? <a href="signup.php"> Signup</a></p>
						</div>	
					</form>
				</div>	
			</div>		
		</div>
	</body>
</html>