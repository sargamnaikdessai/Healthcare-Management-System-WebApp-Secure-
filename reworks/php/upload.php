<?php
	$target_dir = "uploads";
	chdir($target_dir);
	$user_phone = $_POST["phone_number"];
	if(!is_dir(strval($user_phone)))
	{
		mkdir(strval($user_phone),0777);
	}
	else 
	{
		echo "Directory already exists !";
	}
	chdir("../"); //since we have to come out of the uploads folder :)
	$target_file = $target_dir.'/'.strval($user_phone).'/'.basename($_FILES["file"]["name"]);
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
		if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file))
		{
			echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
		}
		else 
	    {
	        echo "Sorry, there was an error uploading your file.";
	    }
	}
?>
