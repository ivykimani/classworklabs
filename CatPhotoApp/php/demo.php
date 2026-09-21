<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
    <h1>Recommended Books</h1>

    <?php 
    $books = [
        "The Great Gatsby",
        "To Kill a Mockingbird",
        "1984",
        "Pride and Prejudice",
        "The Catcher in the Rye"
    ];
    ?>

    <ul>
       <!--
        <li>The Great Gatsby</li>
        <li>To Kill a Mockingbird</li>
        <li>1984</li>
        <li>Pride and Prejudice</li>
        <li>The Catcher in the Rye</li>
        -->

        
        <?php foreach ($books as $book) 
        //{
           // echo each book as a list item
            /*echo "<li>" . $book . "</li>"; */
           // echo "<li>$book</li>";
        //}

        :?>

        <li><?php echo $book; ?></li>

        <?php endforeach; ?>
        
    </ul>

</body>
</html>