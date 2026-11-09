<?php
// connect.php - saves form data to database
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "application";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$firstname = $_POST['firstname'];
$email     = $_POST['email'];
$subject   = $_POST['subject'];
$country   = $_POST['country'];
$comment   = $_POST['comment'];
$gender    = $_POST['gender'];
$degree    = isset($_POST['degree']) ? implode(',', $_POST['degree']) : '';

$sql = "INSERT INTO applicants
        (firstname, email, subject, country, comment, gender, degree)
        VALUES ('$firstname','$email','$subject','$country',
                '$comment','$gender','$degree')";

if ($conn->query($sql) === TRUE) {
    echo "Record saved successfully!";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
