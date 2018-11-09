<!DOCTYPE html>
<?php include("fun.php");?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
<div class="jumbotron" style="background:url('image/5.jpg') no-repeat;background-size: cover;height: 200px;"></div>

<div class="container">
<div class="card">
<div class="card-body" style="background-color: #3498DB;color: #ffffff">
	<div class="row">
		<div class="col-md-1">
	       <a href="admin-panel.php" class="btn btn-light">Go Back</a>
	   </div>
	   <div class="col-md-3">
	       <h3>Patient Details</h3>
	   </div>
	   <div class="col-md-8">
	   	  <form class="form-group" action="patient_search.php" method="post">
	   	  	<div class="row">
	   	  	  <div class="col-md-10"><input type="text" name="search" class="form-control" height="100px" placeholder="Enter contact" required></div>     
	   	      <div class="col-md-2"><input type="submit" name="patient_search_submit" class="btn btn-light" value="search"></div>
	   	    </div>
	   	  </form>
	   </div>	   
    </div>
</div>
<div class="card-body" style="background-color: #3498DB;color: #ffffff">
<table class="table table-hover">
  <thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email Id</th>
      <th>Contact</th>
      <th>Doctor</th>
      <th>Payment</th>
    </tr>
  </thead>
  <tbody>
    <?php get_patient_details(); ?>
  </tbody>
</table>
</div>		
</div>
</div>
				

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>