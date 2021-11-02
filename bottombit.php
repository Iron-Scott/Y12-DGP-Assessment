

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

			

		<div class="flex-container">

			</div>

			


				<div class="advanced-frame">
		
				

			<h2>Advanced Search</h2>
			

			<form class="searchform" method="post" action="advanced.php" 
				enctype="multipart/form-data">

			<input class="adv" type="text" name="adv_pokemonname" size="40"
			value="" placeholder="Name" />

		
			
			<!--Pokemon Type One-->

			<select class="search adv" name="type1">
			
			<option value="" disabled selected>Type 1...</option>
			<?php
				$pokemontype_sql="SELECT * FROM `type1` ORDER BY `type1`.`Type1` ASC ";
				$pokemontype_query=mysqli_query($dbconnect, $pokemontype_sql);
				$pokemontype_rs=mysqli_fetch_assoc($pokemontype_query);
			
				do {
					?>

					<option value="<?php echo $pokemontype_rs['Type1'] ?>"><?php echo $pokemontype_rs['Type1'] ?></option>
					
					<?php

				} // end cubetype do loop
 
				while ($pokemontype_rs=mysqli_fetch_assoc($pokemontype_query));

			?>

			</select>

			<select class="search adv" name="type2">
			
			<option value="" disabled selected>Type 2...</option>
			<?php
				$pokemontype2_sql="SELECT * FROM `type2` ORDER BY `type2`.`Type2` ASC ";
				$pokemontype2_query=mysqli_query($dbconnect, $pokemontype2_sql);
				$pokemontype2_rs=mysqli_fetch_assoc($pokemontype2_query);
			
				do {
					?>

					<option value="<?php echo $pokemontype2_rs['Type2']; ?>"><?php echo $pokemontype2_rs['Type2']; ?></option>
					
					<?php

				} // end cubetype do loop
 
				while ($pokemontype2_rs=mysqli_fetch_assoc($pokemontype2_query));

			?>

			</select>
				<!-- Something is causing this advanced frame to fail. No idea why. Will make fixes later. -->
			
			<select class="search adv" name="generation">

			<option value="" disabled selected>Generation...</option>
			<p>Generation:</p>
			<?php
				$pokemongeneration_sql="SELECT * FROM `generation` ORDER BY `generation`.`Generation` ASC ";
				$pokemongeneration_query=mysqli_query($dbconnect, $pokemongeneration_sql);
				$pokemongeneration_rs=mysqli_fetch_assoc($pokemongeneration_query);
			
				do {
					?>

					<option value="<?php echo $pokemongeneration_rs['Generation']; ?>"><?php echo $pokemongeneration_rs['Generation']; ?></option>
					
					<?php

				} // end cubetype do loop
 
				while ($pokemongeneration_rs=mysqli_fetch_assoc($pokemongeneration_query));

			?>

				<form class="searchform" method="post" action="advanced.php" 
				enctype="multipart/form-data">

		

			<input class="submit advanced-button" type="submit" name="advanced"
				value="Advanced Search... &nbsp; &#xf002;" />

				</form>

			</div> <!-- / wrapper -->	
			</div>
			-->	
		
	

		<div class="box footer">
				<p>Scoot 2021</p>
			</div> <!-- / footer -->

    </body>