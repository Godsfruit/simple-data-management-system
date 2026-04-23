<?php
$result = $conn->query("SELECT * FROM records");

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Location</th>
<th>Data Value</th>
<th>Date</th>
</tr>";

while($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['name']}</td>
    <td>{$row['location']}</td>
    <td>{$row['data_value']}</td>
    <td>{$row['date_created']}</td>
    td><a href='delete.php?id={$row['id']}'>Delete</a></td>
    </tr>";
}

echo "</table>";
?>
