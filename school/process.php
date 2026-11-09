<?php  /* process.php */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $_POST["name"];
    $email   = $_POST["email"];
    $zip     = $_POST["zip"];
    $country = $_POST["country"];
    $line = "$name,$email,$zip,$country\n";
    file_put_contents("hnd2023.txt", $line, FILE_APPEND);
}
// Read file and display as HTML table
$lines = file("hnd2023.txt", FILE_IGNORE_NEW_LINES);
echo "<table border='1'>";
echo "<tr><th>Name</th><th>Email</th><th>Zip</th><th>Country</th></tr>";
foreach ($lines as $row) {
    $cols = explode(",", $row);
    echo "<tr><td>{$cols[0]}</td><td>{$cols[1]}</td>
              <td>{$cols[2]}</td><td>{$cols[3]}</td></tr>";
}
echo "</table>";
?>
