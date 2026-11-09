<?php
$conn = new mysqli("localhost","root","","school");
// Create database if needed:
// mysqli_query($conn, "CREATE DATABASE school");
$sql = "CREATE TABLE IF NOT EXISTS SWE (
    id      INT AUTO_INCREMENT PRIMARY KEY,
    name    VARCHAR(100),
    email   VARCHAR(100),
    zip     VARCHAR(20),
    country VARCHAR(50)
)";
mysqli_query($conn, $sql);

$name=$_POST["name"]; $email=$_POST["email"];
$zip=$_POST["zip"];   $country=$_POST["country"];
$stmt = $conn->prepare(
    "INSERT INTO SWE (name,email,zip,country) VALUES (?,?,?,?)");
$stmt->bind_param("ssss",$name,$email,$zip,$country);
$stmt->execute();
echo "Data saved successfully.";
?>
 