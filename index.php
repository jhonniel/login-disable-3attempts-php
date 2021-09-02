<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://sourcecodester.com">Sourcecodester</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - Disable Login In 3 Attempts</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-3">
		<h5>Username: admin</h5>
		<h5>Password: admin</h5>
		</div>
		<div class="col-md-6">
			<form method="POST" action="">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control" required="required"/>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" required="required" />
				</div>
				
				<?php include 'login.php'?>
				
				<center><button class="btn btn-primary" name="login" <?php if(ISSET($_SESSION['msg'])){ echo $_SESSION['msg'];}?>><span class="glyphicon glyphicon-log-in"></span> Login</button> <a class="btn btn-success" href="reset.php"><span class="glyphicon glyphicon-refresh"></span> Reset</a></center>
			</form>
		</div>
	</div>
</body>	
</html>