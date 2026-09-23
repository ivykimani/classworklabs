<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Mira and Muse</title>
    </head>
    <body>
        <!-- Include the header and footer fragments for a consistent page layout. -->
        <!-- These files should contain reusable HTML, not a complete document. -->
        <?php
        include __DIR__ . "/../html/header.html";
        ?>
        <p>Hello, Welcome to Mira and Muse!</p>

        <?php include __DIR__ . "/../html/footer.html"; ?>
        <?php
        $title = "My First Post";
        $author = "Mira and Muse";
        $wordCount = 123;     
        include __DIR__ . "/../php/article-header.php"; ?>
    </body>
</html>