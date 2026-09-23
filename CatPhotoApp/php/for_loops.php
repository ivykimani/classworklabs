<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>For Loops Example</title>
    </head>
    <body>
     <h1>For Loops Example</h1>
     <hr>
     <!-- For loops are used to iterate over arrays or repeat a block of code a specific number of times. -->
     <!-- In the code below, we iterate over the $luckyNumbers array and print each number. -->
      <?php
      $luckyNumbers = array(3, 7, 13, 21, 42);
      for($i = 0; $i < count($luckyNumbers); $i++){
        echo "$luckyNumbers[$i] <br>";

      }
      ?>
    </body>
</html>