<?php
// save.php
$conn = mysqli_connect('localhost', 'root', '', 'application');
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

$lastname = $_POST['lastname'];
$course   = $_POST['course'];
$gender   = $_POST['gender'];
$phone    = $_POST['phone'];
$address  = $_POST['address'];
$email    = $_POST['email'];
$password = password_hash($_POST['pwd'], PASSWORD_DEFAULT);

$sql = "INSERT INTO students (lastname, course, gender, phone, address, email, password)
         VALUES ('$lastname','$course','$gender','$phone','$address','$email','$password')";

if (mysqli_query($conn, $sql)) {
    echo 'Record saved successfully!';
} else {
    echo 'Error: ' . mysqli_error($conn);
}
mysqli_close($conn);
?>
