<html>
<head>
	<title>Patient Portfolio - File/Folder Upload</title>
</head>
<body>

	<div id="title-heading">
	 <h1 class="aliceblue">Patient Portfolio - File/Folder Upload</h1>
	</div>
	      
	<div id="submit">
		<form method="POST" enctype="multipart/form-data">
			
			<label for="phone">Enter the mobile number</label>
			<input type="text" name="phone_number" id="phone"><br/><br/>
			
			Choose a File to upload : <input type="file" name="file" /><br/>
			<h4> OR </h4>
			Choose a Directory :  <input type="file" name="files[]" id="folder" multiple directory="" webkitdirectory="" mozdirectory="">
			<br/><br/>
			<input type="submit" value="Upload" name="submit"/>
		</form>
	</div>
</body>
</html>
<?php
	if (isset($_POST["submit"]) and $_FILES["file"]["name"]!="")
	{
		$target_dir = "uploads";
		chdir($target_dir);
		$user_phone = $_POST["phone_number"];
		if(!is_dir(strval($user_phone)))
		{
			mkdir(strval($user_phone),0777);
		}
		chdir("../"); //since we have to come out of the uploads folder :)

		$target_file = $target_dir.'/'.strval($user_phone).'/'.basename($_FILES["file"]["name"]);
		//$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$uploadFlag = 1;

		//Check if the file already exists
		if (file_exists($target_file)) 
		{
	    	echo "Sorry, file already exists.";
	    	$uploadFlag = 0;
		}

		//Check and upload file based on uploadFlag
		if ($uploadFlag==0)
		{
			echo "Sorry, The file could not be uploaded";
		}
		else
		{
			if (move_uploaded_file($_FILES["file"]["tmp_name"], basename($_FILES["file"][")))name"]
			{
				date_default_timezone_set("Indian/Maldives");
				$compressed_file = $target_dir."/".strval($user_phone)."/".implode("",explode("-",date("Y-m-d"))).implode("",explode(":",date("h:m:s")));
				$command = "7z a -t7z -m0=lzma -mx=9 -mfb=64 -mmf=bt4 -md=32m -ms=on ".$compressed_file." ".basename($_FILES["file"]["name"]);
				exec($command);
				exec ("del ".basename($_FILES["file"]["name"]));
				echo "The file has been uploaded.";
			}
			else 
		    {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}
	}
	else if (isset($_POST["submit"]) and $_FILES["files"]["name"]!="")
	{
		$target_dir = "uploads";
		chdir($target_dir);
		$user_phone = $_POST["phone_number"];
		if(!is_dir(strval($user_phone)))
		{
			mkdir(strval($user_phone),0777);
		}
		chdir("../");
		$target_file = $target_dir.'/'.strval($user_phone);
		exec("mkdir records");
		//$target_file = $target_file.'/records';
		foreach($_FILES['files']['name'] as $i=>$name)
        {
            if(strlen($_FILES['files']['name'][$i]) > 1)
            {
                move_uploaded_file($_FILES['files']['tmp_name'][$i],'records/'.$name);
            }
        }
        //echo "Folder is uploaded successfully ..";
        date_default_timezone_set("Indian/Maldives");
		$compressed_file = $target_dir.'/'.strval($user_phone).'/'.implode("",explode("-",date("Y-m-d"))).implode("",explode(":",date("h:m:s")));
		exec("cd $target_file");
		$command = "7z a -t7z -m0=lzma -mx=9 -mfb=64 -mmf=bt4 -md=32m -ms=on ".$compressed_file." records";
		//echo "$command";
		exec($command);
		exec ("del/q records & rmdir records");
        //echo "Compression completed successfully";
	}
?>
