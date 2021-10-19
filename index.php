<!DOCTYPE html>

<head>
<html lang="en">

<?php

session_start(); // to allow variable transfer between pages...
include("config.php");

//Connect to Database...

$dbconnect=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);


if(mysqli_connect_errno()) {
echo "Connection Failed:".mysqli_connect_error();
exit;
}

?>


	
</head>
	<body>
	

		<p class="message">Eek! Your browser does not support grid. 
		Please upgrade your system.</p>
		
		<?php include ("topbit.php") ?>
			<div class="box main">
				<h2>Welcome</h2>
				
				
				</h2>

				<nav id="nav" class="navbar navbar-expand-sm bg-dark navbar-dark">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" ref="database.php">Database</a>
				</li>
        <li class="nav-item">
					<a class="nav-link" href="contact-us.php">Contact-Us</a>
				</li>
			</ul>
		</nav>
				</p>
				
				</p>

			</div>
			
			<div class="box side">
				<h2><h2>Add A Pokemon |
					<a class="side" href="showall.php">Show All </a></h2>
				
				<p>

				</p>
				</div> <!-- / wrapper -->

				<!-- Contents -->
		<!-- Using Bootstrap grid ideas Source:https://www.w3schools.com/bootstrap4/bootstrap_grid_basic.asp -->

	<?php include ("bottombit.php") ?>
					
	</body>
</html>