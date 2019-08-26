<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userreg');
$name = $_POST['user'];
$pass = $_POST['pass'];
$s = " select * from usertable where name='$name'";
//$s = " select * from user where name='$name' && password='$pass'";
$result = mysqli_query($con, $s); 
$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['username']=$name;
	header('location:resume.php');
}
else{
	header('loacation:login.php');
	mysqli_query($con, $reg);
	echo "Login UnSuccessful";
}
?>