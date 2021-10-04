<div class="type-frame">

<h2>Search For Type</h2>

<form class="searchform" method= "post"
action="type.php" enctype="multipart/form-data">

</form>

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