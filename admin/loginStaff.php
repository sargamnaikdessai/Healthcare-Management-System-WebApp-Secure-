<?php
session_start();
$staff_name = $_POST['staff_name_l'];
$staff_pass = $_POST['staff_pass_l'];
$hospital = $_POST['hospital'];
$conn = mysqli_connect("localhost","root","","hms");
$q1 = "select staff_id from staff where staff_username = '$staff_name' and staff_password='$staff_pass';";
$run=mysqli_query($conn,$q1);
$info=mysqli_fetch_array($run);
if($info){
	$_SESSION['staff_id'] = $info['staff_id'];
	header("location:DoctorAvailability.php");
}
else{
	header("location:StaffLogin.php");
}
?>