<?php
session_start();
	echo "Registration ";

header('location:index.php');
require_once 'server/db_connection.php';
$name = $_POST['user_name'];
$pass = $_POST['user_password'];
$email = $_POST['user_email'];
echo $email;
$s = "select * from costomers where cust_email = '$email'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num==1){
	echo"UserName alredy Taken";
}else{
	$reg= "insert into customers(cust_name,cust_email,cust_pass) values ('$name','$email','$pass')";
	mysqli_query($con, $reg);
	echo "Registration Successful";
}
?>