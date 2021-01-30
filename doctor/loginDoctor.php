<?php
$doc_name = $_POST['doc_name_l'];
$doc_pass = $_POST['doc_pass_l'];
$conn = mysqli_connect("localhost","root","","hms");
$q1 = "select doctor_id,doctor_password from doctor where doctor_username = '$doc_name'"; //and doctor_password='$doc_pass';";
$run=mysqli_query($conn,$q1);
if($run and $info=mysqli_fetch_array($run)){
	$hash = $info['doctor_password'];
	$check = password_verify ($doc_pass,$hash);
	if ($check) header("location:createPrescription.php");
	else echo "Invalid Password";
}
else{
	echo ("Failure");
	//header("location:DoctorLogin.php");
}
?>