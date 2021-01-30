<?php
session_start();
$uname = $_POST['uname'];
$pswd = $_POST['pswd'];
$conn = mysqli_connect("localhost","root","","spec_db");
$q1 = "select * from staff where usrname = '$uname' and paswd='$pswd';";
$run=mysqli_query($conn,$q1);
if($run){
	$_SESSION['logged_in_id']=$info['uname'];
	header("location:drava2.php");
}
else{
	header("location:HospReg.php");
}

?>
