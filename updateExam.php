<?php
// Database connection details
$servername = "localhost";
$username = "root"; // Replace with your actual username
$password = ""; // Replace with your actual password
$dbname = "lms";

// Create connection
$conn = new mysqli('localhost', 'root', '', 'lms');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$courseCode = $_POST['CC'];
$module = $_POST['module'];
$examDate = $_POST['Edate'];
$courseWork = $_POST['CW'];
$examMarks = $_POST['exam'];
$finalGrade = $_POST['finalGrade'];
$examID = $_POST['examID']; // Assuming you have an exam ID to identify the record

// Prepare the SQL statement
$sql = "UPDATE student_exam_details 
        SET Course_Code = ?, Module = ?, Exam_Date = ?, Course_Work = ?, Exam_Marks = ?, Final_Grade = ?
        WHERE exam_id = ?";
$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param("sssssssi", $courseCode, $module, $examDate, $courseWork, $examMarks, $finalGrade, $examID);

// Execute the statement
if ($stmt->execute()) {
    echo "Exam results updated successfully!";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>