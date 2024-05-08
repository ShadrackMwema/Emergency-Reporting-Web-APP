<?php
$server   = "localhost:3307";
$database = "reporting";
$username = "root";
$password = "Qwerty.23";

$mysqlConnection = mysqli_connect($server, $username, $password);
if (!$mysqlConnection) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connection successful";

$select_db = mysqli_select_db($mysqlConnection, $database);
if (!$select_db) {
    die("Database selection failed: " . mysqli_error($mysqlConnection));
}

$result = mysqli_query($mysqlConnection, "SELECT * FROM items");

if (!$result) {
    die("Query failed: " . mysqli_error($mysqlConnection));
}

while ($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row['id'] . " Name: " . $row['name'] . " " . $row['price'] . "<br>";
}

mysqli_free_result($result);

mysqli_close($mysqlConnection);
?>
