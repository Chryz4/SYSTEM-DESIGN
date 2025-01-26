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
echo $email;
echo $password;

// Prepare and execute SQL statement for student
$stmt_student = $conn->prepare("SELECT * FROM student_registration WHERE email = ? AND password = ?");
$stmt_student->bind_param("ss", $email, $password);
$stmt_student->execute();
$result_student = $stmt_student->get_result();

if ($result_student->num_rows > 0) {
    // Redirect to student portal page
    header("Location: file:///C:/wamp64/www/StudentPortal.html");
    exit();
}

// Prepare and execute SQL statement for admin
$stmt_admin = $conn->prepare("SELECT * FROM admin_details WHERE Email = ? AND Password = ?");
$stmt_admin->bind_param("ss", $email, $password);
$stmt_admin->execute();
$result_admin = $stmt_admin->get_result();

if ($result_admin->num_rows > 0) {
    // Redirect to admin portal page
    header("Location: file:///C:/wamp64/www/ADMENU.html ");
    exit();
} else {
    // Display error message (e.g., incorrect credentials)
    echo "Invalid email or password.";
}

$stmt_student->close();
$stmt_admin->close();
$conn->close();
?>