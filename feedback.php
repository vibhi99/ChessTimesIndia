<?php
$con = mysqli_connect('localhost','root');

if($con)
{
	echo "";
}
else
{
	die("Connection failed because".mysqli_connect_error());
}

mysqli_select_db($con, 'chesstimesindia');

$user = $_POST['username'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

$query = " insert into feedback_info(name, email, feedback) values('$user', '$email', '$feedback') ";

echo "$query";

mysqli_query($con, $query);

header('location:index.html');

?>