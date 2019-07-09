<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body style="background:url('image/1.jpeg') no-repeat;background-size: cover">
<div class="container" style="width: 300px;margin-top: 100px">
	 <div class="card">
	 	<div class="card-body">
		     <form class="form-group" action="fun.php" method="post">
			    <label>Username</label><br>
		        <input type="text" name="username" placeholder="enter username" class="form-control" required><br>

		        <label>Password</label><br>
		        <input type="password" name="password" placeholder="enter password" class="form-control" required=><br>
		        <input type="submit" name="login_submit" class="btn btn-primary">
		     </form>
			
	   </div>
	</div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
