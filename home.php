<?php 
session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<div class="container">
	<a class="float-right" href="logout.php">Logout</a>
	<h1>  Hello <?php echo $_SESSION['username'];?>  </h1>
</div>
</body>
</html>