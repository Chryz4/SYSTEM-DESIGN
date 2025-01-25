<?php
$StuID = $_POST['stu_num'];
$fullName = $_POST['full_name'];
$age = $_POST['age'];
$password = $_POST['password'];
$email = $_POST['email'];
$contactNum = $_POST['contact'];
$NIC = $_POST['nic'];

// Database connection (replace with your actual credentials if necessary)
$conn = new mysqli('localhost', 'root', '', 'lms');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL statement
$stmt = $conn->prepare("INSERT INTO student_personal_details2 (stu_num, full_name, age, password, email, contact, nic) VALUES (?, ?, ?, ?, ?, ?, ?)");

// Bind parameters
$stmt->bind_param("ssissss", $StuID, $fullName, $age, $password, $email, $contactNum, $NIC);

// Execute the statement
if ($stmt->execute()) {
    echo "Registration Successful!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>