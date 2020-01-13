<?php
	if(isset($_POST['sub'])){
	//to disable Notice errors on System. Notices removal.
 	error_reporting( error_reporting() & ~E_NOTICE );
	session_start();
	include("db_connect.php");
	if($_SESSION['place']<=0)
		$_SESSION['place']=1;

	if(isset($_POST)){$st=$_POST['start_time'];}
	if(isset($_POST)){$et=$_POST['end_time'];}
	if(isset($_POST)){$name=$_POST['name'];}
	if(isset($_POST)){$date=$_POST['date'];}
	if(isset($_POST)){$vehical_no=$_POST['vehical'];}


	$email = $_SESSION['email'];
	#echo "<br>".$email."<br>";

	$select_query = "SELECT username , mobile_no FROM sinsert WHERE email = '$email' ";

	$result = mysqli_query($conn , $select_query);
	if(mysqli_num_rows($result)>0)
		while($row = mysqli_fetch_assoc($result)){
			$_SESSION['username'] = $row['username'];
			$_SESSION['mob_no'] = $row ['mobile_no'];
		}
	
	$username = $_SESSION['username'];
	$mob_no = $_SESSION['mob_no'];

	$query = "INSERT INTO users(start_time,end_time,email,vehical_no,name,username,mobile_no) VALUES('$st','$et','$email','$vehical_no','$name','$username','$mob_no')";
	
	$res = mysqli_query($conn,$query);
	if(!$res)
	{
		die(mysqli_error($conn));
	}
	else
	{
		#echo 'time inserted';
		#header('location:home.html');
	}

	if($_SESSION['place']<=8) 
	{
		$place = $_SESSION['place'];
		#echo "Alloted place no is ".$place;
		$_SESSION['place']++;

	}
	else
	{
		#echo "no Place available";
		header('location:medium.html');
	}
		}

?>


<html>
<head>
<title>Home Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <style type="text/css">
		.form-container{
				color: black#E9EAD6;
				font-size: 25px;
				font-style: bold;
				margin-top: 20%;
				border: 0px solid black;
				padding: 50px 60px;
				-webkit-box-shadow: -1px 2px 30px 5px rgba(0,0,0,0.75);
			-moz-box-shadow: -1px 2px 30px 5px rgba(0,0,0,0.75);
			box-shadow: -1px 2px 30px 5px rgba(0,0,0,0.75);
			background-color: #f2f2f2;
		}
		.form-container h5 {
			text-align: center;
		}
		.form-container a{
			color: #343a40;
		}
	</style>
</head>
<body>
<nav class="navbar navbar-inverse">
 	<div class="container-fluid">
 		<div class="navbar-header">
 			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#myNavbar">
 				<span class="icon-bar"></span>
 				<span class="icon-bar"></span>
 				<span class="icon-bar"></span>
 			</button>
 			<a href="home.html" class="navbar-brand"></a>
 		</div>

 		<ul class="nav navbar-nav"> 
 			<li ><a href="home.html"><span class="glyphicon glyphicon-home"></span> Home</a></li>
 		</ul>
 		<ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
 	</div>
 </nav>

 <center><h1>WELCOME TO THE PARKING SOLUTIONS</h1></center>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
		 <form class="form-container">
		 	<div class="form-group">
		 		<h3>Name : <?php  echo $name;?></h3>
		 	</div>
			<div class="form-group">
				<h3>Email : <?php  echo $email;?> </h3>
			</div>
			<div class="form-group">
				<h3>Star-time : <?php  echo $st;?> </h3>
				<h3>End-time : <?php echo $et;?> </h3>
			</div>
			<div class="form-group">
				<h3>Vehical No. : <?php  echo $vehical_no;?> </h3>
			</div>
			<div class="form-group">
				<h3>Parking Space Allocated : <?php echo "<b>".$place."</b>";?></h3>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
</div> 