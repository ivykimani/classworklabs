<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Mad Libs Game</title>
    </head>
    <body>
        <h1>Mad Libs Game</h1>
        <form action="MadLibs_game.php" method="get">
            Color:<input type="text" name="color" id="color" placeholder="Enter a color"><br>
            Plural Noun: <input type="text" name="pluralNoun" id="pluralNoun" placeholder="Enter a plural noun"><br>
            Activity: <input type="text" name="activity" id="activity" placeholder="Enter an activity"><br>
            <input type="submit">
        </form>
        <br><br>
        <?php
        $color = $_GET["color"];
        $pluralNoun = $_GET["pluralNoun"];
        $activity = $_GET["activity"];
        echo "Roses are $color <br>";
        echo "$pluralNoun are blue <br>";
        echo "I love $activity <br>";
        echo "And so do you!";
        ?>
    </body>

</html>
