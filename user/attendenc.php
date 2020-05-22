<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>
<?php include('atten.php') ?>
 <!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity-crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family-Candal|Lora">

<link rel="stylesheet" type="text/css" href="../css/style.css">

<link rel="stylesheet" type="text/css" href="../css/admin.css">
<link rel="stylesheet" type="text/css" href="profile.css">



<link rel="stylesheet" href="../admin/attendance/addstudent.css">

	<title>Dash-Board</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".btn").click(function(){
				$(".input, .text-area").val(" ");
			});
		});
	</script>
</head>
<body>

	<header>
		<div class="logo">
			<!--<h1 class="logo-text"><span>AGA</span>Mi</h1>-->
			<a href="index.php"><img src="../image/logo.png" height="65"></a>
			
		</div>
		<i class="fa fa-bars menu-toggle"></i>
		<ul class="nav">
			<li>
				<a href="#">
					<i class="fa fa-user"></i>
					User
					<i class="fa fa-chevron-down" style="font-size: .8em;"></i>
				</a>
				<ul>
					<li><a href="../agami2/index.php" class="logout">Logout</a></li>
				</ul>
			</li>
		</ul>
	</header>
	

	<!------Admin page wrapper----------->

	<div class="admin-wrapper">

		<!------Left sidebar------------->
		<div class="left-sidebar">
			 <ul>
                 <li><a href="attendenc2.php">Attendance</a></li>
                 <li><a href="../admin/quiz/index.php">Online Exam</a></li>
                 <li><a href="Liveclass/button.php">Live Class</a></li>
                 <li><a href="RecordVideo/record.php">Recording</a></li> 
            </ul>


		</div>


		<!-----Admin content---------->
		<div class="admin-content">
			<div class="button-group">
				<!--<a href="attendenc.php" class="btn btn-primary">Attendance List</a>-->
			</div>

			
			 

				<div class="admin-content">
			<div class="button-group">
			</div>

			<div class="content">
			

				<div class="wrap">
					<form action="attendenc.php" method="post">
			        <h2>Attendence</h2>
			      	<?php include('error.php') ?>
			        <input type="text" placeholder="Name" name="name">
			        <input type="text" placeholder="USN" name="usn">
			         <input type="text" placeholder="Subject Code" name="subcode">
			        <input type="text" placeholder="Section" name="section">
			       
			        
			        <button type="submit" name="attend">Submit</button>
			        </form>
			    </div>

			</div>

		</div>
	</div>
	
				</div>	
			
			</div>

		</div>
	</div>
	
	<!-----JQuery---------->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	
	<script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/classic/ckeditor.js"></script>

	<script src="../../js/scripts.js"></script>

</body>
</html>