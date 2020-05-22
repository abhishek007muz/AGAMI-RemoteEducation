<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity-crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family-Candal|Lora">

<link rel="stylesheet" type="text/css" href="../../css/style.css">

<link rel="stylesheet" type="text/css" href="../../css/admin.css">

	<title>Dash-Board</title>
</head>
<body>

	<header>
		<div class="logo">
			<!--<h1 class="logo-text"><span>AGA</span>Mi</h1>-->
			<img src="../../agami2/images/logo.png" height="65">
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
                <li><a href="../attendenc2.php">Attendance</a></li>
                 <li><a href="../index.php">Online Exam</a></li>
                 <li><a href="../Liveclass/button.php">Live Class</a></li>
                 <li><a href="record.php">Recording</a></li>                
            </ul>


		</div>


		<!-----Admin content---------->
		<div class="admin-content">
			
			<div class="content">
            
                <center>
                    <video width="600" controls>
                    <source src="test.webm" type="video/webm"> 
                    Your browser does not support HTML video.
                    </video>
                    <div>
                        <p>Java Class 12-05-2020</p>
                    </div>
                </center>

			</div>

		</div>
	</div>
	
	<!-----JQuery---------->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	
	<script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/classic/ckeditor.js"></script>

	<script src="../../js/scripts.js"></script>

</body>
</html>