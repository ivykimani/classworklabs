<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo2</title>
</head>
<body>
    <h1>Recommended Books</h1>

    <?php 
    $books = [
        ['name' =>"The Great Gatsby",
        'author' => "F. Scott Fitzgerald",
        'link' => "example.com"],
        ['name' => "To Kill a Mockingbird", 
        'author' => "Harper Lee",
        'link' => "example.com" ],
        ['name' => "1984", 
        'author' => "George Orwell",
        'link' => "example.com"],
        ['name' => "Pride and Prejudice",
         'author' => "Jane Austen",
         'link' => "example.com"],
        ['name' => "The Catcher in the Rye",
         'author' => "J.D. Salinger",
         'link' => "example.com"],
         ['name' => "Franny and Zooey",
         'author' => "J.D. Salinger",
         'link' => "example.com"],
         ['name' => "Nine Stories",
         'author' => "J.D. Salinger",
         'link' => "example.com"]
    ];

    $filterByAuthor = function ($books, $author) {
        // Filter books by author
        $filteredBooks = [];

        foreach ($books as $book) {
            if ($book['author'] === $author) {
                $filteredBooks[] = $book;
            }
        }
        return $filteredBooks;
    };
     $filteredBooks = $filterByAuthor($books, 'J.D. Salinger');
    ?>

    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <a href="<?= $book['link'] ?>">
                    <?= $book['name']; ?> - By <?= $book['author'] ?>)
                </a>
        </li> 

            <!-- <?php if ($book['author'] == 'J.D. Salinger') : ?>

         <li>
                <a href="<?= $book['link'] ?>">
                    <?= $book['name']; ?> - By <?= $book['author'] ?>)
                </a>
        </li> 
            <?php endif; ?> -->
    <?php endforeach; ?>
    </ul>

    
</body>
</html>
