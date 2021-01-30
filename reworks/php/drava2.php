<?php
	session_start();
	if(!isset($_SESSION['logged_in_id'])){
		header("location:HospReg.php");
	}
?>

<!DOCTYPE html>
	<html>
		<head>
			<title>Doctor Availability</title>
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
  				

  			</style>


		</head>


		<body>
			  <div id="container" class="jumbotron" style="margin-top: 50px;">
  
			  <div class="row">
			  <div class="col-md-6 col-md-offset-3">
			  <p><br><b><h2 align="center"><kbd>Doctor Availability</kbd></h2></b></br></p>	

			  <div>
				  <form method="POST" action ="Drname1.php" autocomplete="off">
					 	<div class="autocomplete" style="width:500px;">
					 	<label><h4><b>Enter Specialization</b></h4></label>
					    <input type="text" id="spec" name="spec" placeholder="Select Specialization" class="form-control">
					    <div id="specList"></div>
					    <label><h4><b>Enter Doctor Name</b></h4></label>
					    <input type="text" id="doc" name="doc" placeholder="Enter Doctor" class="form-control">
					

						<div><p><h4><b>Enter Timings</b></h4></p></div>
						<label><h4><b>Day</b></h4></label>
						<input type="date" name="day"/><br/>
						<label><h4><b>From</b></h4></label>
					    <input type="time" id="tim" name="tim">
					    <label><h4><b>To</b></h4></label>
					    <input type="time" id="tim1" name="tim1">
					  	</div>
					  <input type="submit" value="submit"/>
				  </form>
			  </div>
				  

				<!--div class="wrapper"><button class="button" onclick="myFunction()">Save</button></div-->
				
				<script>
				function myFunction() {
  					var x = document.getElementById("myTime").value;
  					var y = document.getElementById("myTime1").value;
  					document.getElementById("timeList").innerHTML = x;
  					document.getElementById("timeList1").innerHTML = y;
				}
				</script>
				<div>

				</div>

		</body>
</html> 


<!---------------------------------------Specialization Dropdown----------------------------------->

<!--script>
	$(document).ready(function(){
		$('#spec').keyup(function(){
			var query = $(this).val();
			if(query != ''){
				$.ajax({
					url:"Dravadb.php",
					method:"POST",
					data:{query:query},
					success:function(data){
						$('#specList').fadeIn();
						$('#specList').html(data);
					}
				});
			}
			else{
				$('#specList').fadeOut();
				$('#specList').html("");
			}
		});

		$(document).on('click','li',function(){
			$('#spec').val($(this).text());
			$('#specList').fadeOut();
		});
	});

</script-->





