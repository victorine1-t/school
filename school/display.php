<?php
$conn = new mysqli("localhost","root","","school");
$result = mysqli_query($conn,"SELECT * FROM SWE");
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th>
          <th>Zip</th><th>Country</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>{$row["id"]}</td><td>{$row["name"]}</td>
              <td>{$row["email"]}</td><td>{$row["zip"]}</td>
              <td>{$row["country"]}</td></tr>";
}
echo "</table>";
?>
 