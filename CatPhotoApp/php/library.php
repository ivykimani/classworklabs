<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CLibrary</title>
    </head>
    <body>
        <h1>Welcome to the Library</h1>
        <hr>
        <!--in this file we define the Book class and create several book objects and construct them with title, author, and pages-->

        <?php
        class Book {
            var $title;
            var $author;
            var $pages;

            function __construct($aTitle, $aAuthor, $aPages){
                $this->title = $aTitle;
                $this->author = $aAuthor;
                $this->pages = $aPages;                
            }

            function hasSummary(){
                if($this->pages > 300){
                    return "true";
                }
                return "false";
            }
        }

        $book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald", 180);

        $book2 = new Book("To Kill a Mockingbird", "Harper Lee", 281);

        $book3 = new Book("1984", "George Orwell", 328);

        $book4 = new Book("Pride and Prejudice", "Jane Austen", 279);

        $book5 = new Book("Moby Dick", "Herman Melville", 635);

        echo $book1->title;
        echo "<br>";
        echo $book1->hasSummary();  
        echo "<hr>";
        ?>

        <!--Here we dive into getters and setters-->
        <?php
        class VideoGames {

        private $rating;
        public $title;
        public $duration;
        public $platform;  

            function __construct($aTitle, $aDuration, $aPlatform, $aRating){
                $this->title = $aTitle;
                $this->duration = $aDuration;
                $this->platform = $aPlatform;
                $this->rating = $aRating;
            }
            function getRating(){
                return $this->rating;
            }
            function setRating($aRating){
                $this->rating = $aRating;
            }
        }

        $game1 = new VideoGames("The Legend of Zelda: Breath of the Wild", 50, "Nintendo Switch", "E");
        $game2 = new VideoGames("God of War", 40, "PlayStation 4", "M");
        $game3 = new VideoGames("Minecraft", 100, "PC", "E");
        $game4 = new VideoGames("The Witcher 3: Wild Hunt", 70, "PC", "M");
        $game5 = new VideoGames("Horizon Zero Dawn", 60, "PlayStation 4", "T");

        echo $game1->title;
        echo "<br>";
        echo $game1->duration;
        echo "<br>";
        echo $game1->platform;
        echo "<br>";
        echo $game1->getRating();

        ?>
    </body>
</html>