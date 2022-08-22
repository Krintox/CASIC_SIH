<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "casic");
$conn = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
mysqli_set_charset($conn,"utf8");
date_default_timezone_set("Asia/Kolkata");


$event_id=$_POST['event_id'];
$event_name=$_POST['event_name'];
$event_date=$_POST['event_date'];
$event_status=$_POST['event_status'];
$inst_code=$_POST['inst_code'];
$inst_name=$_POST['inst_name'];
$query=mysqli_query($conn,"insert into events(event_id,event_name,event_date,event_status,inst_code,inst_name)values('$event_id','$event_name','$event_date','$event_status','$inst_code','$inst_name')");
// echo "insert into casic(name,email,organisation,linked_profile,state,description1)values('$name','$email','$organisation','$linked_profile','$state','$description1')";
if($query)
{
	echo "One value inserted into table";
}
else
{
	echo "One value Not inserted into table";
}

?>
