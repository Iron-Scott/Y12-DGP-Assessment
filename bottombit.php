<div class="box side">
			<h2><h2>Add A Pokemon |
				<a class="side" href="showall.php">Show All</a></h2>
				
			<form class="searchform" method="post"
            action="searchname.php" enctype="multipart/form-data">

			<input class="search" type="text" name="name" 
			size="30" value="" required placeholder="Name..."/>

			<input class="submit" type="submit" 
			name="find_user_name" value="&#xf002;" />
                </form>

				<form class="searchform" method="post" action="notlegendary.php" 
				enctype="multipart/form-data">

				<input class="submit free" type="submit" name="free"
				value="All Normal Pokemon &nbsp; &#xf002;" />

				<form class="searchform" method="post" action="legendary.php" 
				enctype="multipart/form-data">

				<input class="submit free" type="submit" name="free"
				value="All Legendary Pokemon &nbsp; &#xf002;" />

			</form>

			<br />
			<hr />
			<br />

			<div class="type-frame">

			<h2>Search For Type</h2>

			<form class="searchform" method= "post"
			action="type.php" enctype="multipart/form-data">

			<select class="type" name="type">

			<?php
				$pokemontype_sql="SELECT * FROM `type1` ORDER BY `type`.`type1` ASC";
				$pokemontype_query=mysqli_query($dbconnect, $pokemontype_sql);
				$pokemontype_rs=mysqli_fetch_assoc($pokemontype_query);
			
				do {
					?>

					<option value="<?php echo $pokemontype_rs['Pokemon Type']; ?>"></option>
				
					<?php
			}
			
			while ($pokemontype_rs=mysqli_fetch_assoc($pokemontype_query));
			?>

		</select>

		<input class="submit type-button" type="submit" action="type.php"
			name="type" value="Search Type &nbsp; &#xf002;" />
</div>



			<br />
			<hr />
			<br />	

			<div class="advanced-frame">
		
			<h2>Advanced Search</h2>


			

			<form class="searchform" method="post"
			action="advanced.php" enctype="multipart/form-data">

			<input class="adv" type="text" name="adv_pokemonname" size="40"
			value="" placeholder="Name" />



		
			

			
			<!-- Cube Type Dropdown -->
			<select class="search adv" name="type">

			<?php
				$pokemontype_sql="SELECT * FROM `cubetype` ORDER BY `type`.`type1` ASC";
				$pokemontype_query=mysqli_query($dbconnect, $pokemontype_sql);
				$pokemontype_rs=mysqli_fetch_assoc($pokemontype_query);
			
				do{
					?>

					<option value="<?php echo $pokemontype_rs['Pokemon Type']; ?>"></option>
					
					<?php

				} // end cubetype do loop

				while ($cubetype_rs=mysqli_fetch_assoc($cubetype_query));

			?>

			</select>
				<!-- Something is causing this advanced frame to fail. No idea why. Will make fixes later. -->
			<!-- Cube Times Less Than, More Than -->

		<div class = "flex-container">
			<div class="adv-txt">
				Time:
			</div> <!-- Time Label -->

			<div>
				<input class="adv" type="text" name="time" size="40"
				value="" placeholder="..."/>
			</div>

			</div>

			<input class="adv-txt" type="checkbox" name="in-app"
			value="0">Less Than...

			<input class="submit advanced-button" type="submit" action="advanced.php"
			name="advanced" value="Search &nbsp; &#xf002;" />

			-->
			</div> <!-- / wrapper -->	
			</div>
		</form>
			
		<div class="box footer">
				<p>Scoot 2021</p>
			</div> <!-- / footer -->

    </body>