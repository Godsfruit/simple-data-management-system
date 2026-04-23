<?php
include 'connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM records WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error deleting record";
}
?>
