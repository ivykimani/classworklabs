<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chef Page</title>
</head>
<body>
    <?php
    class chef {
        function makeChicken(){
            echo "The chef is making chicken.";
        }
        function makeSalad(){
            echo "The chef is making salad.";
        }
        function makeSpecialDish(){
            echo "The chef is making chicken curry.";
        }
    }

    class ItalianChef extends Chef {
        function makePasta(){
            echo "The Italian chef is making pasta.";
        }
        function makeRisotto(){
            echo "The Italian chef is making risotto.";
        }
        // Override the makeSpecialDish method for the Italian chef
        function makeSpecialDish(){
            echo "The Italian chef is making lasagna.";
        }
    }

    $chef = new Chef();
    $chef->makeSpecialDish();
    echo "<br>";

    $italianChef = new ItalianChef();
    $italianChef->makeSpecialDish();
    echo "<br>";

    ?>
</body>
</html>