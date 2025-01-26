<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_portal";

// Create connection
$conn = new mysqli('localhost', 'root', '', 'student_portal');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get email and password from form
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare and execute SQL statement
$stmt = $conn->prepare("SELECT * FROM student_registration WHERE email = ? AND password = ?");
$stmt->bind_param("ss", $email, $password);
$stmt->execute();

$result = $stmt->get_result();

// Check if a row was returned
if ($result->num_rows > 0) {
    // Redirect to studentportal page
    header("Location: C:/wamp64/www/StudentPortal.html");
    exit();
} else {
    // Display error message (e.g., incorrect credentials)
    echo "Invalid email or password.";
}

$stmt->close();
$conn->close();
?>