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


$name=$_POST['name'];
$email=$_POST['email'];
$organisation=$_POST['organisation'];
$linked_profile=$_POST['linked_profile'];
$state=$_POST['state'];
$description1=$_POST['description1'];


 $query=mysqli_query($conn,"insert into casic(name,email,organisation,linked_profile,state,description1)values('$name','$email','$organisation','$linked_profile','$state','$description1')");
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
