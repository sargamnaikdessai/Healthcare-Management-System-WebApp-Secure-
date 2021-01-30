<?php
		$connect=mysqli_connect("localhost", "root", "", "spec_db");

		$doc = $_POST["doc"];

		
		$query = "INSERT INTO doc_table(doc_name) VALUES('$doc');";
    	$run = mysqli_query($connect,$query);

    	echo ($run)?"success":"fail";
    	header("location:drava2.php")

?>