<?php 
	session_start();
	if(!isset($_SESSION['username'])){
		header('location:login.php');
	}
?>
<?php include 'conn.php' ;?>

<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}</style>

<body class="w3-light-grey">
<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">
	<a class="float-right" href="logout.php">Logout</a>

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="profile.jpg" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-white">
            <h2>Md. Abu Naeem</h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Competitive Programmer</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Dhaka, Bangladesh</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>mdabunaeem@gmail.com</p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>01521438627</p>
          <hr>
		  
	<p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills
	</b> <a href="add.php" class="fa fa-plus fa-fw w3-right w3-large w3-text-teal"></a></p>
	<?php 
		$sql = 'SELECT * FROM `skills`'; 
		$result = mysqli_query($conn, $sql);
		while($row = mysqli_fetch_assoc($result)) {
			//echo "id: ".$row["id"]." - Name: ".$row["skillname"]." ".$row["skilllevel"]."<br>";
	?>
			<p><?php echo $row["skillname"];?> 
				<a href="edit.php?edit=<?php echo $row["id"];?>">
					<i class="fa fa-edit fa-fw w3-right w3-large w3-text-teal"></i>
				</a>
				<a href="resume.php?del=<?php echo $row["id"];?>">
					<i class="fa fa-remove fa-fw w3-right w3-large w3-text-teal"></i>
				</a>
			</p>
			<div class="w3-light-grey w3-round-xlarge w3-small">
				<div class="w3-container w3-center w3-round-xlarge w3-teal" 
				style="width:<?php echo $row["skilllevel"];?>%"> <?php echo $row["skilllevel"];?></div>
			</div>
			<p><?php echo $row["skillname"];?> 
			
	<?php 
		} 
		if(isset($_GET['del'])){
			$del_id = $_GET['del'];
			$sql = "DELETE FROM `skills` WHERE id=$del_id";
			if(mysqli_query($conn, $sql)){
				echo "<script>window.location='resume.php'</script>";
			}	
		}
	?>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
          <p>Bangla</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
          <p>English</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:80%"></div>
          </div>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Honor && Award</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Programming Contest</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Spring'18  <span class="w3-tag w3-teal w3-round"> CHAMPION</span></h6>
          <p> Intra Department Programming Contest , SWE-DIU.</p>
		  <hr>
        </div>
		<div class="w3-container">
          <h5 class="w3-opacity"><b>Programming Contest</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Fall'18  <span class="w3-tag w3-teal w3-round"> 1st Runner - Up</span></h6>
          <p> Intra Department Programming Contest , SWE-DIU.</p>
		  <hr>
        </div>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Daffodil International University</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Present</h6>
          <p>B.Sc in Software Engineering</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Udayan Higher Secondary School</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i> </h6>
          <p>Higher Secondary Certificate </p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>West End High School</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i> </h6>
          <p>Secondary School Certificate </p><br>
        </div>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>


<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p>Created by <a target="_blank">Md. Abu Naeem</a></p>
</footer>
</body>
</html>
