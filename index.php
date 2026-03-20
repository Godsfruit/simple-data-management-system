<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Data Collection Form</h2>

<form action="insert.php" method="POST">
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="location" placeholder="Location" required>
    <input type="text" name="data_value" placeholder="Data Value" required>
    <button type="submit">Submit</button>
</form>

<hr>

<h2>Stored Data</h2>

<?php include 'fetch.php'; ?>

</body>
</html>
