<?php include ("topbit.php"); 

    $find_sql = "SELECT * FROM `cubetimes` ";
    $find_query = mysqli_query($dbconnect, $find_sql);
    $find_rs = mysqli_fetch_assoc($find_query);
    $count = mysqli_num_rows($find_query);

?>
 


<div class="box main">
    <h2>All Results</h2>

    <?php

    if($count < 1) {

        ?>

        <div class="error">

            Sorry! There are no results to match your search. Please use the search box in the side bar to try again.

        </div> <!-- End Error -->
        
        <?php
    } // end no results if

    else {
        do
        {
        
        ?>

        <!-- Results go here -->
        <div class="results">
            You have results!
        </div> <!-- /Results -->

    <?php    

        } // end results 'do'

        while
            ($find_rs=mysqli_fetch_assoc($find_query));
    
        } // end else

    ?>


    </div> <!-- / main -->

 <div class="box side">
			<h2><h2>Add A Time |
				<a class="side" href="showall.php">Show All </a></h2>
				
			<p>

			</p>
			</div> <!-- / wrapper -->

    
<?php include ("bottombit.php") ?>


