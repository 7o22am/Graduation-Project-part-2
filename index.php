<?php 

		session_start();

		if( !isset($_SESSION["user"]) )
		{
			header("Location:login.php");
		}


?>
<!DOCTYPE html>
<html>
<head>
		<link rel="shortcut icon" href="img/assiut.jpeg">
	<title>Home Page</title>
	<style>
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		body{
	background-color: #a4508b;
	background-image: linear-gradient(326deg, #a4508b 0%, #5f0a87 74%);
	
	background-size: cover;
	background-repeat: no-repeat;

		}
		div{
		 width: 100%;
  		text-align: center;
  		position: relative;
		margin-top: 100px

		}

		
		.link{
			background-color: #861657;
			background-image: linear-gradient(326deg, #861657 0%, #ffa69e 74%);
			border-radius: 15px;
			min-width: 250px;
			width: 300px;
			padding: 10px 20px;
			position: relative;
			left: 50%;
			transform: translateX(-50%);
			margin-bottom: 35px
		}
		.link a{
			text-decoration: none;
			color: #fff;
			font-size:25px;
			transition:all .5s ease-in-out;
		}
		.link:hover a{
			font-size:35px;

		}

	</style>
</head>
<body>
	<div class="container">
		<div class="link">
			<a href="lectuer.php" class="lec">Lecture</a>
		</div>
		<div class="link">
			<a href="sec.php" class="lec">Section</a>
		</div>
		<div class="link">
			<a href="Feedback.php" class="lec">Feedback</a>
		</div>
		<div class="link">
			<a href="change.php" class="lec">Change Password</a>
		</div>
		<div class="link">
			<a href="logout.php" class="lec">Log Out</a>
		</div>
	</div>
</body>
</html>