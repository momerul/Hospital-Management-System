<!DOCTYPE html>
<?php include('fun.php'); ?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="jumbotron" style="background:url('image/5.jpg') no-repeat;background-size: cover;height: 150px;"></div>	
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2">
		      <div class="list-group" id="list-tab" role="tablist">
		      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Appointment</a>
		      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Payment Status</a>
		      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Prescription</a>
		      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Doctors Section</a>
		      <a class="list-group-item list-group-item-action" id="list-attend-list" data-toggle="list" href="#list-attend" role="tab" aria-controls="settings">Attendance</a>
		      <a class="list-group-item list-group-item-action" id="list-attend-list" data-toggle="list" href="patient_details.php" role="tab" aria-controls="settings">Patient Details</a>
		    </div>
		    
			<div class="list-group">
				<a href="login_page.php" class="list-group-item list-group-item-action">Logout</a>				
			</div>
        </div>
		<div class="col-md-1"></div>
		<div class="col-md-6">
		  <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
			  <div class="card">
				<div class="card-body" style="background-color: #3498DB;color: #ffffff">
					<center>Create an appointment</center>
				</div>
				<div class="card-body">
					<form action="fun.php" method="post">
						<div class="row">
						      <div class="col-md-4"><label>First Name:</label></div>
			                  <div class="col-md-8"><input type="text" class="form-control" name="fname" required></div><br><br>
			                  <div class="col-md-4"><label>Last Name:</label></div>
			                  <div class="col-md-8"><input type="text" class="form-control"  name="lname" required></div><br><br>
			                  <div class="col-md-4"><label>Email id:</label></div>
			                  <div class="col-md-8"><input type="text"  class="form-control" name="email" required></div><br><br>
			                  <div class="col-md-4"><label>Contact Number:</label></div>
			                  <div class="col-md-8"><input type="text" class="form-control"  name="contact" required></div><br><br>
			                  <div class="col-md-4"><label>Doctor:</label></div>

			                  <div class="col-md-8">
			                  <select name="docapp" class="form-control" required>
				                 <!-- <option value="Dr. Punam Shaw">Dr. Punam Shaw</option>
				                  <option value="Dr. Ashok Goyal">Dr. Ashok Goyal</option> -->
				                  <?php get_doctor(); ?>
			                  </select>
			                  </div><br><br>

			                  <div class="col-md-4"><label>Payment:</label></div>
			                  <div class="col-md-8">
			                   <select name="payment" class="form-control" required>
			                      <option value="Paid">Paid</option>
			                      <option value="Pay later">Pay later</option>
			                    </select>
			                  </div><br><br><br>
			                  <div class="col-md-4">
			                    <input type="submit" name="entry_submit" value="Create new entry" class="btn btn-primary" id="inputbtn">
			                  </div>
			                                   
			            </div>
				   </form>
				</div>
			</div>
		</div>
		
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
      	<div class="card">
      		<div class="card-body" style="background-color: #3498DB;color: #ffffff">
				<center>Update payment</center>
			</div>
      		<div class="card-body">
      			<form class="form-group" method="post" action="fun.php">
                  <input type="text" name="contact" class="form-control" placeholder="enter contact" required><br>
                  <select name="status" class="form-control" required>
                      <option value="paid">paid</option>
                      <option value="pay later">pay later</option>
                  </select><hr>
                 <input type="submit" value="update" name="update_data" class="btn btn-primary">
               </form>
      		</div>
      	</div>
      </div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">...</div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
      	<div class="card">
      		<div class="card-body" style="background-color: #3498DB;color: #ffffff">
				<center>Add doctor</center>
			</div>
      		<div class="card-body">
      			<form class="form-group" method="post" action="fun.php">
                  <input type="text" name="doctor" class="form-control" placeholder="Enter doctor" required>
                  <hr>
                 <input type="submit" value="Add" name="Add_Doctor" class="btn btn-primary">
               </form>
      		</div>
      	</div>
      </div>
    </div>
</div>
<div class="col-md-1"></div>
<div class="col-md-2">
	<div class="list-group">
		<a href="" class="list-group-item list-group-item-action active">Patient</a>
		<a href="patient_details.php" class="list-group-item list-group-item-action">Patients Details</a>
		<a href="" class="list-group-item list-group-item-action">Payment status</a>
		<a href="" class="list-group-item list-group-item-action">Payment/Checkout</a>
	</div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<!--sweetalertjs-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.10/sweetalert2.all.js"></script>

</body>
</html>