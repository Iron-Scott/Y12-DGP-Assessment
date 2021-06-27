<?php include ("topbit.php"); 


session_start(); // to allow variable transfer between pages...
include("config.php");

//Connect to Database...

$dbconnect = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);


if(mysqli_connect_errno()) {
echo "Connection Failed:".mysqli_connect_error();
exit;
}

    $find_sql = "SELECT * FROM `cubetimes` JOIN userid ON (cubetimes.User = userid.UserID)
    
    ";
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
            <span class="sub_heading">
                <?php echo $find_rs["Time"]; ?>
            </span> 

    <p>
        <?php echo $find_rs['User'] ?>
        <?php echo $find_rs['Username'] ?>
    </p>

           
        </div>
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


