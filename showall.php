<?php include ("topbit.php"); 


session_start(); // to allow variable transfer between pages...
include("config.php");

//Connect to Database...

$dbconnect=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);


if(mysqli_connect_errno()) {
echo "Connection Failed:".mysqli_connect_error();
exit;
}

<<<<<<< HEAD
$find_sql = "SELECT * FROM `pokemon` 
JOIN type1 ON (pokemon.Type1 = type1.type1ID)
JOIN type2 ON (pokemon.Type2 = type2.type2ID)
JOIN generation ON (pokemon.Generation = generation.GenerationID)

";
=======
    $find_sql = "SELECT * FROM `cubetimes` ";
>>>>>>> parent of ccf6a00 (25.06.2021)
    $find_query = mysqli_query($dbconnect, $find_sql);
    $find_rs = mysqli_fetch_assoc($find_query);
    $count = mysqli_num_rows($find_query);

?>
 


<div class="box main">
    <h2>All Results</h2>

<<<<<<< HEAD
    <?php include ("results.php") ?>
=======
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
            <?php echo $find_rs["Time"]; ?>
        </div> <!-- /Results -->

        <br />

    <?php    

        } // end results 'do'

        while
            ($find_rs=mysqli_fetch_assoc($find_query));
    
        } // end else
>>>>>>> parent of ccf6a00 (25.06.2021)



    </div> <!-- / main -->



    
<?php include ("bottombit.php") ?>


