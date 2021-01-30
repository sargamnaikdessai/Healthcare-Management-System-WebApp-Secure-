<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Staff-Login</title>
			<meta charset="utf-8"> 
  			<meta name="viewport" content="width=device-width,initial-scale=1">
  			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  			<style>

  				div.form{
    				display: block;
    				text-align: center;
				}

			form{
			    display: inline-block;
			    margin-left: auto;
			    margin-right: auto;
			    text-align: left;
			}

  			</style>



	</head>

		<body>
			  <div id="container" class="jumbotron" style="margin-top: 50px;">
  
			  <div class="row">
			  <div class="col-md-6 col-md-offset-3">
			  <p><b><h2 align="center"><kbd>Staff Login</kbd></h2></b></p>	
				</div>

			<div class="form">
				<br>
			  <form autocomplete="off">
				 	<div class="autocomplete" style="width:500px;">
				 		<label><h4><b>Sign in to your account</b></h4></label>
				 	<br><label><h4><b>Enter Hospital</b></h4></label></br>
				    <input type="text" id="hosp" name="hosp" placeholder="Select Hospital" class="form-control">
				    <div id="hospList"></div>
				  </div>
			  </form>
			</br>
			  </div>

			  <p>
			  <div class="form">
				<form action= "RegPhp.php" method="POST" autocomplete="off">
				  <div class="autocomplete" style="width:500px;">
				    <input type="text" id="uname" name="uname" placeholder="Username" class="form-control">
				    <div id="uList"></div>
				  </div>
				</p>
				
			 
				
				  <div class="autocomplete" style="width:500px;">
				    <input type="Password" id="pswd" name="pswd" placeholder="Password" class="form-control">
				    <div id="pList"></div>
				  </div>
			
							
							<div class="form-actions" style="width:500px;">
								
								<br><button type="submit" class="btn btn-primary pull-right" name="submit">
									Login <i class="fa fa-arrow-circle-right" style="width:500px;"></i>
								</button>
							</br>
							</div>
						</form>
				
				</div>

			</div>
		</div>

	
	</body>
	<!-- end: BODY -->
</html>

<script>
	$(document).ready(function(){
		$('#hosp').keyup(function(){
			var query = $(this).val();
			if(query != ''){
				$.ajax({
					url:"HospList.php",
					method:"POST",
					data:{query:query},
					success:function(data){
						$('#hospList').fadeIn();
						$('#hospList').html(data);
					}
				});
			}
			else{
				$('#hospList').fadeOut();
				$('#hospList').html("");
			}
		});

		$(document).on('click','li',function(){
			$('#hosp').val($(this).text());
			$('#hospList').fadeOut();
		});
	});

</script>