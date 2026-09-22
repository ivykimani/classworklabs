<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Functions</title>
    </head>
    <body>
        <?php
        function sayHi($name, $age){
            echo "Hello $name!, you are $age years old. <br>";
        }

        sayHi("Alice", 25);//used to call the function with the name "Alice"
        sayHi("Bob", 30);
        sayHi("Charlie", 35);
        ?>

        <?php
        //2^3 -> 2*2*2; 2 raised to the power of 3
        function cube($num){
            echo "Hello";//having this here allows for hello to be printed on screen before the cube result
             echo"<br>";
           return $num * $num * $num;
           echo "Hello again";//this will not be executed because it comes after the return statement
        }
        $cubeResult = cube(4);// stores the result of cube(4) in $cubeResult
        echo $cubeResult;

        ?>
    </body>
</html>