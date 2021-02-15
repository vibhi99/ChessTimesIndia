<?php
$con = mysqli_connect('localhost','root');

if($con)
{
	echo "Connection Successful";
}
else
{
	echo "No connection";
}

mysqli_select_db($con, 'chesstimesindia');

$user = $_POST['username'];
$email = $_POST['email'];
$package = $_POST['package'];

$query = " insert into user_registration_info(name, email, package) values('$user', '$email', '$package') ";

echo "$query";

mysqli_query($con, $query);

header('location:registration.html');

?>