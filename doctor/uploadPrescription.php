<?php
$medicine= $_POST['field_name'];

//create json of prescription
//$result = array_combine($medicine,$time);
$count = count($medicine);
for ($x = 0; $x < $count ; $x++)
{
	$result[] = array("Medicine" => $medicine[$x]);
}
$json_data = json_encode($result,JSON_PRETTY_PRINT);
$target_dir = "prescriptions";
chdir($target_dir);
$user_phone = $_POST["phone_number"];
if(!is_dir(strval($user_phone)))
{
	mkdir(strval($user_phone),0777);
}
chdir("../");
file_put_contents($target_dir.'/'.strval($user_phone).'/prescription.json', $json_data);
header("location:DoctorHomeScreen.php");
?>