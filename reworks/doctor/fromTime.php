<?php
		$connect=mysqli_connect("localhost", "root", "", "spec_db");

		$tim = $_POST["tim"];
		$tim1 = $_POST["tim1"];

		
		$query = "INSERT INTO doc_table(from_time,to_time) VALUES('$tim','$tim1');";
    	$run = mysqli_query($connect,$query);

    	echo ($run)?"success":"fail";
    	header("location:drava2.php")

?>