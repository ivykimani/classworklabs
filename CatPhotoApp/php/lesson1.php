<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Hello World!</title>
    </head>
    <body>
        <?php
        $characterName = "Peter";
        $characterAge = 65;
        //echo "Hello World!";
        echo "<h1>Lesson 1</h1>";
        echo "<hr>";
        echo "<h2>Silly Story!</h2>"; 
        //echo "<p>Hello World!</p>";
        echo "<p>
         There was once a man named $characterName<br>
         He was $characterAge years old. <br>
         He really liked the name $characterName <br>
         But he didn't like being $characterAge
         </p>"; 
        ?>
        <?php
         $phrase = "Giraffe Academy";
         $age = 20;
         $gpa = 2.67;
         $isMale = true;
         $isMale = false;
        ?>
        <?php
        echo "<h2>$phrase</h2>";
        echo strtoupper($phrase);// echo strtoupper($phrase) would make it uppercase
        echo "<br>";
        echo strtolower($phrase);// echo strtolower($phrase) would make it lowercase
        echo "<br>";
        echo strlen($phrase); // echo strlen($phrase) would give the length of the string
        echo "<br>";
        echo $phrase[0];// echo the first character of the string
        echo "<br>";
        echo str_replace("Giraffe", "Dragon", $phrase);// echo str_replace("Giraffe", "Dragon", $phrase) would replace "Giraffe" with "Dragon"
        echo "<br>";
        echo substr($phrase, 8, 3);// echo substr($phrase, 8, 3) would give a substring starting at index 8 with length 3
        ?>
        <?php
        echo "<h2>Numbers</h2>";
        echo 5 + 9;
        echo "<br>";
        echo 5 - 9;
        echo "<br>";
        echo 5 * 9;
        echo "<br>";
        echo 5 / 9;
        echo "<br>";
        echo 10 % 3;// echo 10 % 3 would give the remainder of 10 divided by 3
        echo "<br>";
        echo (5 + 4) * 10;// echo (5 + 4) * 10 would first add 5 and 4, then multiply the result by 10
        echo "<br>";
        echo 5 + 4 * 10;// echo 5 + 4 * 10 would first multiply 4 and 10, then add 5
        echo "<br>";
        $num = 10;
        $num ++;// increment $num by 1
        $num --;// decrement $num by 1
        echo $num; // echo the current value of $num after incrementing and decrementing
        echo "<br>";
        echo abs(-100);// echo abs(-100) would give the absolute value of -100
        echo "<br>";
        echo pow(2, 3);// echo pow(2, 3) would give 2 raised to the power of 3
        echo "<br>";
        echo sqrt(16);// echo sqrt(16) would give the square root of 16
        echo "<br>";
        echo max(5, 10);// echo max(5, 10) would give the maximum of 5 and 10
        echo "<br>";
        echo min(5, 10);// echo min(5, 10) would give the minimum of 5 and 10
        echo "<br>";
        echo round(4.6);// echo round(4.6) would round the number to the nearest integer
        echo "<br>";
        echo ceil(4.2);// echo ceil(4.2) would round the number up to the nearest integer
        echo "<br>";
        echo floor(4.8);// echo floor(4.8) would round the number down to the nearest integer
        echo "<br>";
        ?>
        <?php
        ?>
    </body>
</html>