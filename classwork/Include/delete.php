<?php
// Reuse the shared connection to the my_school_manager database.
require __DIR__ . '/sql.php';

// Deleting data changes the database, so accept the request only through POST.
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['delete_student'])) {
    http_response_code(405);
    header('Allow: POST');
    exit('Method not allowed.');
}

// Validate the internal database row ID submitted by the directory form.
$id = filter_input(INPUT_POST, 'student_id', FILTER_VALIDATE_INT);
if (!$id || $id < 1) {
    http_response_code(400);
    exit('A valid student ID is required.');
}

// Use a placeholder so the ID is treated as an integer value, not SQL code.
$statement = $conn->prepare('DELETE FROM tbl_students WHERE id = ?');
if (!$statement) {
    http_response_code(500);
    exit('Could not prepare the delete request.');
}

$statement->bind_param('i', $id);

// Check execution so a database failure is not reported as a successful deletion.
if (!$statement->execute()) {
    $statement->close();
    http_response_code(500);
    exit('Could not delete the student record.');
}

// A successful query can still match no row if the ID no longer exists.
if ($statement->affected_rows !== 1) {
    $statement->close();
    http_response_code(404);
    exit('Student record not found.');
}

$statement->close();
$conn->close();

// Redirect after POST to prevent refresh from submitting the delete again.
header('Location: ../php/student_view.php');
exit;
?>

