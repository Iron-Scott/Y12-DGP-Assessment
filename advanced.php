<?php include ("topbit.php"); 


session_start(); // to allow variable transfer between pages...
include("config.php");

//Connect to Database...

$dbconnect = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);


if(mysqli_connect_errno()) {
echo "Connection Failed:".mysqli_connect_error();
exit;
}
$name_user = mysqli_real_escape_string($dbconnect, $_POST['adv_pokemonname']);
$type1 = mysqli_real_escape_string($dbconnect, $_POST['t1']);
$type2 = mysqli_real_escape_string($dbconnect, $_POST['type2']);
$generation = mysqli_real_escape_string($dbconnect, $_POST['generation']);


    if (isset($_POST['legendary'])) {
    $legendary = 0;
    }

    else {
        $legendary = 1;
    }
    

    $find_sql = "SELECT * FROM `pokemon` 
    JOIN type1 ON (pokemon.Type1 = type1.type1ID)
    JOIN type2 ON (pokemon.Type2 = type2.type2ID)
    JOIN generation ON (pokemon.Generation = generation.GenerationID)
    WHERE `name` LIKE '%$name_user%'
    AND `type1` LIKE '%$type1%'
    AND `type2` LIKE '%$type2%'
    AND `generation` LIKE '%$generation%'
    
    ";
    
    $find_query = mysqli_query($dbconnect, $find_sql) or die(mysqli_error($dbconnect));
    $find_rs = mysqli_fetch_assoc($find_query);
    $count = mysqli_num_rows($find_query);
    ?>
 


    <div class="box main">
        <h2>All Results</h2>

        <?php include ("results.php") ?>


        </div> <!-- / main -->



    
    <?php include ("bottombit.php") ?>


