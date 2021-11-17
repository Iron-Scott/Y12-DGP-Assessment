<?php include ("topbit.php"); 


session_start(); // to allow variable transfer between pages...
include("config.php");

//Connect to Database...
$dbconnect = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);


if(mysqli_connect_errno()) {
echo "Connection Failed:".mysqli_connect_error();
exit;

}

    $name_user = $_POST['name'];
  
    $find_sql = "SELECT * FROM `pokemon` 
    JOIN type1 ON (pokemon.Type1 = type1.type1ID)
    JOIN type2 ON (pokemon.Type2 = type2.type2ID)
    JOIN generation ON (pokemon.Generation = generation.GenerationID)
    WHERE `name` LIKE '%$name_user%'
    
    ";
   
    $find_query = mysqli_query($dbconnect, $find_sql);
    $find_rs = mysqli_fetch_assoc($find_query);
    $count = mysqli_num_rows($find_query);

?>
 


<div class="box main">
    <h2>Pokemon Name Results</h2>

    <p>Searched for: <?php echo $name_user ?></p>

    <?php include ("results.php") ?>


    </div> <!-- / main -->



    
<?php include ("bottombit.php") ?>


