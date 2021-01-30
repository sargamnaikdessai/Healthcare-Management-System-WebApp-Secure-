
<html>
<head>
	<title>Patient Portfolio - Folder Upload</title>
</head>
<body>

	<div id="title-heading">
	 <h1 class="aliceblue">Patient Portfolio - Folder Upload</h1>
	</div>
	      
	<div id="submit">
		<form action="uploadFolder.php" method="POST" enctype="multipart/form-data">
			
			<label for="phone">Enter the mobile number</label>
			<input type="text" name="phone_number" id="phone"><br/><br/>
			
			<input type="file" name="folder" webkitdirectory directory multiple/><br/><br/>
			
			<input type="submit" value="submit"/>
		</form>
	</div>
</body>
</html>