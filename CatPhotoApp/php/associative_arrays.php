<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Associative Arrays</title>

    </head>
    <body>
        <h1>Associative Arrays in PHP</h1>

        <form action="associative_arrays.php" method="post">
            <input type="text" name="student">
            <input type="submit">
        </form>

        <?php
        $grades = array(
         "Figeuroth Faeth" => "B",
         "Riz Gukgak" => "A",
         "Adaine Abernant" => "A+",
         "Fabian Seacaster" => "C+",
         "Gorgug ThistleSpring" => "B-",
         "Kristen Applebees" => "B+");
          echo $grades[$_POST["student"]];
        ?>

    </body>
</html>