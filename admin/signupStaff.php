<?php
session_start();

$staff_name = $_POST['staff_name_s'];
$staff_pass = $_POST['staff_pass_s'];
$hospital = $_POST['hospital'];
$conn=mysqli_connect("localhost","root","","hms");
$retrieve = "select hospital_id from hospital where hospital_name='$hospital'";
$run=mysqli_query($conn,$retrieve);
if ($info = mysqli_fetch_array($run))
{
	$hospital_id = $info['hospital_id'];
	echo "data inserted";
}
else echo "error";

$q1="insert into staff (staff_username,staff_password,hospital_id) values ('".$staff_name."','".$staff_pass."',$hospital_id)";
$run=mysqli_query($conn,$q1);
if ($run) 
{
	header("location:DoctorAvailability.php");
	$_SESSION['current_hospital']=$hospital;
}
else header("location:StaffLogin.php");//write file here
?>