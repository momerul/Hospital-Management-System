<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body style="background:url('image/1.jpeg') no-repeat;background-size: cover;background-color: #3498DB;color: #ffffff">
<?php
include("fun.php");

if(isset($_POST['patient_search_submit']))
{
	$contact=$_POST['search'];
	$query="select * from doctorappointment where contact='$contact'";
	$result=mysqli_query($con,$query);

	echo "<div class='container' style='margin-top:200px;'>
	<div class='card'>

	<div class='card-body'>	
	<a href='patient_details.php' class='btn btn-light'>Go Back</a>
	<a href='admin-panel.php' class='btn btn-light'>Admin Panel</a>
	</div>	

	<div class='card-body'  style='background-color: #3498DB;color: #ffffff'>
        <table class='table table-hover'>
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
        ";
	
	while($row=mysqli_fetch_array($result)){
  		$fname=$row['fname'];
        $lname=$row['lname'];
        $email=$row['email'];
        $contact=$row['contact'];
        $docapp=$row['docapp'];
        $payment=$row['payment'];
  	

  	echo " <tr>
       <td>$fname</td>
       <td>$lname</td>
       <td>$email</td>
       <td>$contact</td>      
       <td>$docapp</td>
       <td>$payment</td>
  	</tr>";
  }

  echo "</tbody></table></div></div></div>";
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>>