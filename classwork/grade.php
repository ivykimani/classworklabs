<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    exit("Invalid request.");
}

$score = filter_var($_POST["score"] ?? null, FILTER_VALIDATE_FLOAT);

if ($score === false || $score === null || $score < 0 || $score > 100) {
    exit("Please enter a valid score between 0 and 100.");
}

echo "Your score is: " . $score . "%<br>";

if ($score >= 80) {
    $grade = "A";
} elseif ($score >= 60) {
    $grade = "B";
} elseif ($score >= 50) {
    $grade = "C";
} elseif ($score >= 40) {
    $grade = "D";
} else {
    $grade = "F";
}

echo "Grade: " . $grade . "<br>";

switch ($grade) {
    case "A":
        echo "Status: PASSED. Excellent!";
        break;

    case "B":
        echo "Status: PASSED. Good job!";
        break;

    case "C":
        echo "Status: PASSED. Nice effort!";
        break;

    case "D":
        echo "Status: PASSED. You pass!";
        break;

    case "F":
        echo "Status: FAILED. You did not meet the requirements.";
        break;

    default:
        echo "Status: Error.";
        break;
}

?>