<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Arrays</title>
    </head>
    <body>
        <h1>Arrays in PHP</h1>
        <hr>
        <h2>The Expanse: friends and foes</h2>

        <?php
        $friends = array("James Holden", "Naomi Nagata", "Alex Kamal", "Chrisjen Avasarala", "Bobbie Draper", "Amos Burton");
        $foes = array("Marco Inaros", "Filip Inaros", "Sadavir Errinwright", "Anderson Dawes", "Jules-Pierre Mao");
        echo $friends[2];
        echo "<br>";
        echo $foes[0];
        echo "<br>";
        echo count($friends);// echo the number of elements in the $friends array
        echo "<br>";
        ?>

        <h2>Select Your Favorite Spaceships</h2>

        <form action="arrays.php" method = "post">
            Razorback: <input type="checkbox" name="spaceships[]" value="razorback"><br>
            Rocinante: <input type="checkbox" name="spaceships[]" value="rocinante"><br>
            Tachi: <input type="checkbox" name="spaceships[]" value="tachi"><br>
            Behemoth: <input type="checkbox" name="spaceships[]" value="behemoth"><br>
            Canterbury: <input type="checkbox" name="spaceships[]" value="canterbury"><br>
            Nauvoo: <input type="checkbox" name="spaceships[]" value="nauvoo"><br>
            Scopuli: <input type="checkbox" name="spaceships[]" value="scopuli"><br>
            Medina Station: <input type="checkbox" name="spaceships[]" value="medina_station"><br>
            MCRN Donnager: <input type="checkbox" name="spaceships[]" value="mcrn_donnager"><br>
            UNN Agatha King: <input type="checkbox" name="spaceships[]" value="unn_agatha_king"><br>
            <input type="submit"><br>

            <?php
            $spaceships = $_POST['spaceships'];
            echo $spaceships[0]; // echo the first selected spaceship
            echo "<br>";
            echo count($spaceships); // echo the number of selected spaceships
            ?>

        </form>
    </body>
</html>