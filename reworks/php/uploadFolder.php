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
	chdir("../");
	$var = basename($_FILES["folder"]["name"]);
	echo $var; 
?>