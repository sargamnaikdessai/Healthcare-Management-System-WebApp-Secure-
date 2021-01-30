<?php
$donor_id = $_POST['donor_id'];
$date_donated = $_POST['date_donated'];
$date_last_donated = $_POST['date_last_donated'] or NULL;
$is_available = "YES";
$conn = mysqli_connect("localhost","root","","hms");
$query = "insert into bloodbank (donor_id,date_donated,date_last_donated,is_available) values (".$donor_id.",'".$date_donated."','".$date_last_donated."','".$is_available."')";
$execute = mysqli_query($conn,$query);
echo $query;
if ($execute) echo "Success";
else echo "Failure";
header("location:BloodBankDonorForm.php");
?>