<html>
<head> 
	<title>Blood Bank Donor Form</title>
	<meta charset="utf-8"> 
  			<meta name="viewport" content="width=device-width,initial-scale=1">
  			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  			<style>
  				ul{
  					background-color: #eee;
  					cursor: pointer;
   				}

   				li{
   					padding: 12px;
   				}

   				.wrapper {
    				text-align: center;
				}

				.button {
    				position: absolute;
				}
  					body
				{
		background-color: #00b3b3;
	}

  			</style>
</head>


<body>

					<!--start-top-nav-->
				<div class="top-nav">
					<ul>
						<li class="active"><a href="bbDonorForm.php">Blood Bank Donor Form</a></li>
						
						<li><a href="DoctorAvailability.php">Doctor Availability</a></li>

						<li><a href="PatientFileUpload.php">Patient File Upload</a></li>
					</ul>					
				</div>
				<div class="clear"> </div>
				<!--end-top-nav-->


			  <div id="container" class="jumbotron" style="margin-top: 50px;">
			  <div class="row">
			  <div class="col-md-6 col-md-offset-3">
			  <p><br><b><h2 align="center"><kbd>Blood Donor Form</kbd></h2></b></br></p>



	<form action="insertDonorData.php" method="POST">
		<p><h4><b>Name :</p></h4></b> <input type="text" name="donor_id" placeholder = "Insert phoner number !">
		<br/><br/>
		<p><h4><b>Date Donated :</p></h4></b> <input type="date" name="date_donated" placeholder="Date the blood was donated">
		<br/><br/>
		<p><h4><b>Date Last Donated :</p></h4></b> <input type="date" name="date_last_donated" placeholder="last time donated">
		<br/><br/>
		<input type="submit" value="Done !">
	</form>
</body>
</html>