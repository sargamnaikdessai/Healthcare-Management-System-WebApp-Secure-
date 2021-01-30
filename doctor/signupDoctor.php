<?php
$doc_name = $_POST['doc_name_s'];
$doc_pass = $_POST['doc_pass_s'];
$hospital = $_POST['hospital'];
$specialization = $_POST['specialization'];
$conn=mysqli_connect("localhost","root","","hms");
$retrieve = "select hospital_id from hospital where hospital_name='$hospital'";
$run=mysqli_query($conn,$retrieve);
if ($info = mysqli_fetch_array($run))
{
	$hospital_id = $info['hospital_id'];
	echo "data inserted";
}
else echo "error";

//the hashing documentation https://www.php.net/manual/en/function.password-hash.php
//explain how input to the function and what is returned 
//explain how the function by it self generates a salt and appends it 
$doc_pass_hash = password_hash($doc_pass,PASSWORD_BCRYPT);

$q1="insert into doctor (doctor_username,doctor_password,hospital_id,doctor_specialization) values ('".$doc_name."','".$doc_pass_hash."',$hospital_id,'$specialization')";
echo ($q1);
$run=mysqli_query($conn,$q1);
if ($run) echo ("Success");
else echo ("Failure");
//header("location:DoctorHomeScreen.php");
//else header("location:DoctorLogin.php");
?>