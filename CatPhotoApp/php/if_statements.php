<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>If Statements</title>
    </head>
    <body>
        <?php
        $isFarmer = true;//no message is displayed because the condition is false
        $isLivestockOwner = false;
        $isCropFarmer = true;
        $isBeekeeper = true;
        $isFisherman = true;
        $isWoodworker = true;
        if ($isFarmer && $isLivestockOwner)//check if the person is both a farmer and a livestock owner
            {
            echo "Welcome to the Agricultural Convention.";
            echo "<br>";
            echo "Please head on to the Livestock keepers section.";
            } elseif (!$isFarmer || !$isLivestockOwner) {
                echo "Please look for your specific section.";}
                else {echo "Please look for other conventions to participate in.";}

        ?>

        <br>

        <?php
        // Additional if statements can be added here
        //echo max(3, 6);//tells which is bigger
        function getMax($num1, $num2){
            if($num1 > $num2) {
                return $num1;
            } else if ($num1 < $num2) {
                return $num2;
            } else if ($num1 == $num2) {
                return "Both numbers are equal.";
            }
        }

        echo getMax(300, 90);
        echo "<br>";
        echo getMax(30, 90);
        echo "<br>";
        echo getMax(50, 50);
        echo "<br>";
        ?>

        <br>

        <?php
        function getMin($num6, $num7, $num8){
            if($num6 <= $num7 && $num6 <= $num8) {
                return $num6;
            } elseif($num7 <= $num6 && $num7 <= $num8){
                return $num7;
            } else {
                return $num8; 
            }
        }
        echo getMin(300, 90, 400);
        ?>
    </body>

</html>