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

  				

  			</style>


		</head>


		<body>
			  <div id="container" class="jumbotron" style="margin-top: 50px;">
  
			  <div class="row">
			  <div class="col-md-6 col-md-offset-3">
			  <p><br><b><h2 align="center"><kbd>Doctor Availability</kbd></h2></b></br></p>	

			  <div>
			  <form autocomplete="off">
				 	<div class="autocomplete" style="width:500px;">
				 	<label><h4><b>Enter Specialization</b></h4></label>
				    <input type="text" id="spec" name="spec" placeholder="Select Specialization" class="form-control">
				    <div id="specList"></div>
				  </div>
			  </form>
			  </div>

			  <div>
				<form autocomplete="off">
				  <div class="autocomplete" style="width:500px;">
				  	<label><h4><b>Enter Doctor</b></h4></label>
				    <input type="text" id="doc" name="doc" placeholder="Select Doctor" class="form-control">
				    <div id="docList"></div>
				  </div>
				</form>
				</div>

			  <div>
				<form autocomplete="off">
				  <div class="autocomplete" style="width:500px;">
				  	<label><h4><b>Enter Timings</b></h4></label>
				    <input type="text" id="tim" name="tim" placeholder="Select Timings" class="form-control">
				    <div id="timeList"></div>
				  </div>
				</form>
				</div>

				
				<div>

				</div>

		</body>
</html>


<!---Specialization--->
<script>
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

</script>



<!---Doctor Name--->
<script>
	$(document).ready(function(){
		$('#doc').keyup(function(){
			var query1 = $(this).val();
			if(query1 != ''){
				$.ajax({
					url:"Drname.php",
					method:"POST1",
					data:{query1:query1},
					success:function(data){
						$('#docList').fadeIn();
						$('#docList').html(data);
					}
				});
			}
			else{
				$('#docList').fadeOut();
				$('#docList').html("");
			}
		});

		$(document).on('click','li',function(){
			$('#doc').val($(this).text());
			$('#docList').fadeOut();
		});
	});

</script>



