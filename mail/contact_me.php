<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	
   )
   {
	echo "No arguments Provided!";
	return false;
}

$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
$conn =mysqli_connect("localhost","id3242175_guha_5599","guha0804","id3242175_guha");
$q="insert into testing values('$name','$email_address', '$message')";
$sql=mysqli_query($conn,$q);
if($sql)
{
	echo "success";
}

?>