<?php
session_start();
	echo "Registration ";

header('location:index.php');
require_once 'server/db_connection.php';
$name = $_POST['user_name2'];
$pass = $_POST['user_password2'];
$email = $_POST['user_email2'];
echo $email;
$s = "SELECT * FROM customers where cust_email='$email'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num==1){
	echo"UserName alredy Taken";
}else if($num == 0 ){
	$reg= "insert into customers(cust_name,cust_email,cust_pass) values ('$name','$email','$pass')";
	mysqli_query($con, $reg);
	echo "Registration Successful";
}
?>