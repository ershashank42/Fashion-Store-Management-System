<?php
if($_POST)
{
	$host="localhost";
	$user="root";
	$pass="";
	$db="fashion_store";
	$username=$_POST['username'];
	$password=$_POST['password'];

	$conn=mysqli_connect($host,$user,$pass,$db);
	$query="select * FROM login WHERE username='$username' and password='$password'";
	$result=mysqli_query($conn,$query);
	if(mysqli_num_rows($result)!=0)
	{
		header('location: buttons.html');
	}
	else
	{
		header('location: fail.html');
	}
}
?>
