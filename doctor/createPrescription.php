<html>
<head>
	<title>Create Prescription</title>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		    var maxField = 10; //Input fields increment limitation
		    var addButton = $('.add_button'); //Add button selector
		    var wrapper = $('.field_wrapper'); //Input field wrapper
		    var fieldHTML = '<div>Medicine : <input type="text" name="field_name[]" value=""/>'; //New input field html 
		    var x = 1; //Initial field counter is 1
		    
	
	</script>


</head>
<body>
				<!--start-top-nav-->
				<div class="top-nav">
					<ul>
						<li class="active"><a href="createPrescription.php">Create Prescription</a></li>
						
						<li><a href="checkAppointment.php">Check Appointments</a></li>


					</ul>					
				</div>
				<div class="clear"> </div>
				<!--end-top-nav-->

			  <div id="container" class="jumbotron" style="margin-top: 50px;">
  
			  <div class="row">
			  <div class="col-md-6 col-md-offset-3">
			  <p><br><b><h2 align="center"><kbd>Create Prescription</kbd></h2></b></br></p>


	<form action="uploadPrescription.php" method="POST">
		<div class="field_wrapper">
		    <div>
		    	Enter Patient Mobile number registered on Application : <input type="text" name="phone_number" id="phone"><br/><br/>
		        
		        <table border="1">

		        	<tr>
		        		<th>Sr No.</th>
		        		<th>Medicine</th>
		        		<th>Morning</th>
		        		<th>Afternoon</th>
		        		<th>Night</th>
		        	</tr>

		        	<tr>

		        		<td>
		        		<td><input type="text" name="field_name[]" value=""/>
		        		</td>

		        		<td>
		        		<div>
  						<input type="radio" id="Bb" name="Bb" value="Bb">
  						<label for="Bb">Before Breakfast</label>
						</div>

						<div>
  						<input type="radio" id="Ab" name="Ab" value="Ab">
  						<label for="Ab">After Breakfast</label>
						</div>

						<div>Dosage:
						<select>
						<?php
    					for ($i=0; $i<=20; $i++){
        				?>
            			<option value="<?php echo $i;?>"><?php echo $i;?></option>
        				<?php
    					}
						?>
						</select>
						</td>

						<td>
		        		<div>
  						<input type="radio" id="Bl" name="Bl" value="Bl">
  						<label for="Bl">Before Lunch</label>
						</div>

						<div>
  						<input type="radio" id="Al" name="Al" value="Al">
  						<label for="Al">After Lunch</label>
						</div>

						<div>Dosage:
						<select>
						<?php
    					for ($i=0; $i<=20; $i++){
        				?>
            			<option value="<?php echo $i;?>"><?php echo $i;?></option>
        				<?php
    					}
						?>
						</select>
						</td>

						<td>
		        		<div>
  						<input type="radio" id="Bd" name="Bd" value="Bd">
  						<label for="Bd">Before Dinner</label>
						</div>

						<div>
  						<input type="radio" id="Ad" name="Ad" value="Ad">
  						<label for="Al">After Dinner</label>
						</div>

						<div>Dosage:
						<select>
						<?php
    					for ($i=0; $i<=20; $i++){
        				?>
            			<option value="<?php echo $i;?>"><?php echo $i;?></option>
        				<?php
    					}
						?>
						</select>
						</td>

		        	</tr>

		        </table>



		    </div>
		    <br/>
		</div>
		<input type="submit" name="submit"/>
	</form>
</body>