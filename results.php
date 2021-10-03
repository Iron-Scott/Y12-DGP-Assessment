


<?php
function getLegendary($legendary)
{
    if ($var = FALSE)
    return 'black';
    else if ($var = TRUE)
    return 'red';

}


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
            <b>Name</b>:
                <?php echo $find_rs["Name"]; ?>
            </span> 

    <p>
        
        <b>Type 1</b>:
        <?php echo $find_rs['Type1'] ?>
        </p>

    <p>
    
        <b>Type 2</b>:
        <?php echo $find_rs['Type2'] ?>
        </p>
<hr>

        <p>
    <b>Total</b>:
            <?php echo $find_rs['Total'] ?>
            </p>
    <p>

    <b>HP</b>:
        <?php echo $find_rs['HP'] ?>
        </p>
<p>

    <b>Attack</b>:
            <?php echo $find_rs['Attack'] ?>
            </p>
    <p>

    <b>Defense</b>:
        <?php echo $find_rs['Defense'] ?>
        </p>
<p>

<b>Sp. Attack</b>:
        <?php echo $find_rs['Sp. Atk'] ?>
        </p>
<p>

<b>Sp. Defense</b>:
        <?php echo $find_rs['Sp. Def'] ?>
        </p>
<p>
<b>Speed</b>:
        <?php echo $find_rs['Speed'] ?>
        </p>
<p>
        <b>Generation</b>:
        <?php echo $find_rs['Generation'] ?>
        </p>

<p>
<b>Legendary</b>:
        <?php echo $find_rs['Legendary'] ?>
        
        </p>
<p>
           
        </div>
    <?php    

        } // end results 'do'

        while
            ($find_rs=mysqli_fetch_assoc($find_query));
    
        } // end else

    ?>