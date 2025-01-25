<?php

// Database connection details (replace with your actual credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lms";

// Create connection
$conn = new mysqli('localhost', 'root', '', 'lms');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the student ID from the request (e.g., from a form)
$stu_id = $_POST['stu_num'];

// Prepare the SQL statement with a placeholder for the student ID
$sql = "DELETE FROM student_personal_details2 WHERE stu_num = ?";
$stmt = $conn->prepare($sql);

// Bind the student ID to the placeholder
$stmt->bind_param("s", $stu_id); // Assuming stu_id is an integer

// Execute the statement
if ($stmt->execute()) {
    echo "Student with ID " . $stu_id . " deleted successfully.";
} else {
    echo "Error deleting student: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();

?>