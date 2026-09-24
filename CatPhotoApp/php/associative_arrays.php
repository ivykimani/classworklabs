<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Associative Arrays</title>

    </head>
    <body>
        <h1>Associative Arrays in PHP</h1>
        <p>Associative arrays are arrays that use named keys that you assign to them. In this example, we have an associative array called <code>$grades</code>, where the keys are student names and the values are their corresponding grades. When a user submits a student's name through the form, the PHP code retrieves and displays the grade for that student using the associative array.</p>

        <form action="associative_arrays.php" method="post">
            <input type="text" name="student">
            <input type="submit">
        </form>

        <?php

        $grades = array(
         "Figeuroth Faeth" => "B",
         "Riz Gukgak" => "A",
         "Adaine Abernant" => "A+",
         "Fabian Seacaster" => "C+",
         "Gorgug ThistleSpring" => "B-",
         "Kristen Applebees" => "B+");
          echo $grades[$_POST["student"]]; // This line retrieves the grade for the student name submitted through the form
        

        if (isset($_POST["student"])) {
            $student = $_POST["student"];
            if (array_key_exists($student, $grades)) {
                echo "<p>The grade for $student is: " . $grades[$student] . "</p>";
            } else {
                echo "<p>Student not found.</p>";
            }
        }

        ?>

    </body>
</html>