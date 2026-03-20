<?php
include 'connect.php';

$name = $_POST['name'];
$location = $_POST['location'];
$data_value = $_POST['data_value'];

$sql = "INSERT INTO records (name, location, data_value)
        VALUES ('$name', '$location', '$data_value')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $conn->error;
}
?>
