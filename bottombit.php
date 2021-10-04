

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

			</form>
				<form class="searchform" method="post" action="legendary.php" 
				enctype="multipart/form-data">

				<input class="submit free" type="submit" name="free"
				value="All Legendary Pokemon &nbsp; &#xf002;" />

			</form>

			<br />
			<hr />
			<br />


<!-- Review type-frame.php for code -->

			<div class="advanced-frame">
		
			<h2>Advanced Search</h2>


			

			<form class="searchform" method="post"
			action="advanced.php" enctype="multipart/form-data">

			<input class="adv" type="text" name="adv_pokemonname" size="40"
			value="" placeholder="Name" />

		</form>



		
			

			
			<!-- Cube Type Dropdown -->
			<select class="search adv" name="type">

			<?php
				$pokemontype_sql="SELECT * FROM `type2` ORDER BY `type2`.`Type2` ASC";
				$pokemontype_query=mysqli_query($dbconnect, $pokemontype_sql);
				$pokemontype_rs=mysqli_fetch_assoc($pokemontype_query);
			
				do{
					?>

					<option value="<?php echo $pokemontype_rs['Type 2']; ?>"></option>
					
					<?php

				} // end cubetype do loop

				while ($pokemontype_rs=mysqli_fetch_assoc($pokemontype_query));

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
			value="0">Legendary

			<input class="submit advanced-button" type="submit" action="advanced.php"
			name="advanced" value="Search &nbsp; &#xf002;" />

			
			</div> <!-- / wrapper -->	
			</div>
		</form>
			
		<div class="box footer">
				<p>Scoot 2021</p>
			</div> <!-- / footer -->

    </body>