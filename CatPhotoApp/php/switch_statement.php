<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Switch Statement Example</title>

    </head>
    <body>
        <h1>My Favorite Hobby</h1>
        <hr>

        <form action="switch_statement.php" method="post">
            <input type="text" name="favoriteHobby" placeholder="Enter your favorite hobby">
            <br>
            <input type="submit">
        </form>
        <?php
           $favoriteHobby = $_POST["favoriteHobby"];
           switch($favoriteHobby){
            case "crafting"://use full colon for switch statement(specifically for the case)
            echo "I love crafting!";
            break;
            case "reading":
            echo "I love reading!";
            break;
            case "gaming":
            echo "I love gaming";
            break;
            case "traveling":
            echo "I love traveling!";
            break;
            case "cooking":
            echo "I love cooking!";
            break;
            case "sports":
            echo "I love sports!";
            break;
            case "music":
            echo "I love music!";
            break;
            case "photography":
            echo "I love photography!";
            break;
            default://default is used when none of the above cases match
            echo "I love all hobbies!";
            break;
           }
        ?>
    </body>
</html>