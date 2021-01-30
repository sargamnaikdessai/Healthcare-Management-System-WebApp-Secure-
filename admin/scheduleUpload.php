<?php
		session_start();
		$staff_id = $_SESSION['staff_id'];
		$conn=mysqli_connect("localhost", "root", "", "hms");
		$doc = $_POST["doc"];
		$tim = $_POST["tim"];
		$tim1 = $_POST["tim1"];
		$q1 = "select doctor_id from doctor where doctor_username = '$doc';";
		echo $q1;

		$run=mysqli_query($conn,$q1);
		while ($info = mysqli_fetch_array($run)) $doc_id = $info['doctor_id'];
		//in_hospital
		$q1 = "select hospital_id from staff where staff_id = $staff_id;";
		echo $q1;
		$run=mysqli_query($conn,$q1);
		while ($info = mysqli_fetch_array($run)) $current_hospital = $info['hospital_id'];

		$day = $_POST["day"];
		//$days = strtotime($day);
		//$start_time = date('h:i A', strtotime($tim));
		//$end_time = date('h:i A', strtotime($tim1));
		
		$query = "INSERT INTO schedule(in_hospital_id,doctor_id,day,start_time,end_time) VALUES(".$current_hospital.",".$doc_id.",'".$day."','".$tim."','".$tim1."');";
		echo "$query";
    	$run = mysqli_query($conn,$query);

    	echo ($run)?"success":"fail";
    	header("location:DoctorAvailability.php");

?>