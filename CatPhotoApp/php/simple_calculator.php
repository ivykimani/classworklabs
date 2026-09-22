<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Simple Calculator</title>
    </head>
    <body>
        <h1>Simple Calculator</h1>
        <form action="simple_calculator.php" method="get">
            <input type="number" name="num1" placeholder="Enter a number">
            <br>
            <input type="number" name="num2" placeholder="Enter a number">
            <br>
            <input type="Submit">
        </form>

        Answer:
        <?php
        echo $_GET["num1"] + $_GET["num2"];
         ?>
    </body>
</html>