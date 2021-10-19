<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Cubist.Timer</title>
	<link href="/css/data_style.css" rel="stylesheet" type="text/css" />
	<link href="/css/responsive.css" rel="stylesheet" type="text/css" />

	<!-- Bootstrap files -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">

	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">

	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">

	</script>

	<!--FAVICON ICON-->
	<link rel="icon" type="image/jpg" href="/img/logo.jpg">

</head>

<body>
	<script src="/scripts/script.js">

	</script>

	<?php include("topbit.php");
	
	$find_sql = "SELECT * FROM `pokemon` 
	JOIN type1 ON (pokemon.Type1 = type1.type1ID)
    JOIN type2 ON (pokemon.Type2 = type2.type2ID)
    JOIN generation ON (pokemon.Generation = generation.GenerationID);"
 	$find_query = mysqli_query($dbconnect, $find_sql);
	$find_rs = mysqli_fetch_assoc($find_query);
	$count = mysqli_num_rows($find_query);
	?>
	
<!-- Navigation Bar -->
<nav id="nav" class="navbar navbar-expand-sm bg-dark navbar-dark">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" ref="database.php">Database</a>
				</li>
        <li class="nav-item">
					<a class="nav-link" href="contact-us.html">Contact-Us</a>
				</li>
			</ul>
		</nav>

		<!-- Contents -->
		<!-- Using Bootstrap grid ideas Source:https://www.w3schools.com/bootstrap4/bootstrap_grid_basic.asp -->
		<h2>All Results</h2>
		
		<div class="row"><p>	
		<?php
		
		if($count < 1) {

			?>
		

		<div class="error">

		Sorry! There are no results to match your search.
		Please use the search bar in the side bar to try again.
		
		</div> <!-- end error -->
	<?php
		} // end no results 'if'
		
		else {
			do
			{
				?>
		<!-- Results go here -->
		<div class="results">
				<span class='subheading'>
				<?php echo $find_rs['Time']; ?>
				</span>

				<p>
					<?php echo $find_rs['UserID'] ?>
					<?php echo $find_rs['Username'] ?>
		</div> <!-- / Results -->
		<br />

				<?php

			} // end results 'do'

			while
				($find_rs=mysqli_fetch_assoc($find_query));
		} // end results 'else'

		?>
		
		</p>
		</div>
	<?php include ("bottombit.php") ?>
</body>

</html>