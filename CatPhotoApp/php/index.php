<!DOCTYPE html>
<html>
<head>
    <title>Cat Photo App</title>
    <style>
        body {
            display:grid;
            place-items: center;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
     <!--
      <h1>
        <?php
        $greeting = "Hello";
        //echo "$greeting Everybody!";// using double quotes allows variable interpolation
        //echo '$greeting Everybody!';// using single quotes does not allow variable interpolation
        echo $greeting . " " .  "Everybody!"; // - an example of concatenation
        ?>
      </h1>
     -->
      <?php
        $name = "Dark Matter";
        //$read = true;
        $read = false;

        if ($read) {
            $message = "You have read $name";
        }
        else {
            $message = "You have not read $name";
        }
      ?>     
      <h1>
        <!--<?php echo $message; ?> --> 
        <?= $message; ?> <!-- this is a shorthand for <?php echo $message; ?> -->
      </h1>

</body>
</html>
