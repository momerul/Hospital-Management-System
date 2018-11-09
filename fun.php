<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<?php

$con=mysqli_connect("localhost","root","","hmsdb");

if (isset($_POST['login_submit'])) {

  $username=$_POST['username'];
  $password=$_POST['password'];

  $query="select * from login where username='$username' and password='$password'";

  $result=mysqli_query($con,$query);

  $rows=mysqli_num_rows($result);
 
  if($rows==1)
  {
  	header("location:admin-panel.php");
  }
  else
  {  	
  	echo "<script>alert('Invalid username or password')</script>";
  	echo "<script>window.open('login_page.php','_self')</script>";
  }
}

if (isset($_POST['entry_submit']))
 {
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $contact=(string)($_POST['contact']);
  $docapp=$_POST['docapp'];
  $payment=$_POST['payment'];

  $query="insert into doctorappointment(fname,lname,email,contact,docapp,payment) values ('$fname','$lname','$email','$contact','$docapp','$payment')";

  $result=mysqli_query($con,$query);

  if($result)
  {
  	echo "<script>alert('Insert Successful')</script>";
  	echo "<script>window.open('admin-panel.php','_self')</script>";
  }
  else
  {
  	echo "<script>alert('Insert Unsuccessful')</script>";
  	echo "<script>window.open('admin-panel.php','_self')</script>";

  }
}

if (isset($_POST['Add_Doctor']))
{
	$doctorName=$_POST['doctor'];
	$query="Insert into doctorinfo(name)values('$doctorName')";
	$result=mysqli_query($con,$query);
 if($result)
  {
  	echo "<script>alert('Insert Successful')</script>";
  	echo "<script>window.open('admin-panel.php','_self')</script>";
  }
  else
  {
  	echo "<script>alert('Insert Unsuccessful')</script>";
  	echo "<script>window.open('admin-panel.php','_self')</script>";

  }

}

if(isset($_POST['update_data']))
{
	$contact=$_POST['contact'];
	$status=$_POST['status'];

	$sql="update doctorappointment set payment='$status' where contact='$contact'";

	if(mysqli_query($con,$sql))
	  {
	  	echo "<script>alert('Update Successful')</script>";
	  	echo "<script>window.open('admin-panel.php','_self')</script>";
	  }
	  else
	  {
	  	echo "<script>alert('Update Unsuccessful')</script>";
	  	echo "<script>window.open('admin-panel.php','_self')</script>";
	  }
}

function get_patient_details()
{
  	global $con;
  	$query="select * from doctorappointment";
  	$result=mysqli_query($con,$query);
  	

  	while($row=mysqli_fetch_array($result)){
  		$fname=$row['fname'];
        $lname=$row['lname'];
        $email=$row['email'];
        $contact=$row['contact'];
        $docapp=$row['docapp'];
        $payment=$row['payment'];
  	

   echo "<tr>
          <td>$fname</td>
          <td>$lname</td>
          <td>$email</td>
          <td>$contact</td>
          <td>$docapp</td>
          <td>$payment</td>
         </tr>";   
}
}

function get_doctor()
{
	global $con;
  	$query="select * from doctorinfo";
  	$result=mysqli_query($con,$query);

  	while ($row=mysqli_fetch_array($result)) {
  		$name=$row['name'];
  		echo '<option value="'.$name.'">'.$name.'</option>';
  	}
}
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<!--sweetalertjs-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.10/sweetalert2.all.js"></script>

</body>
</html>