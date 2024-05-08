<?php
// Database connection parameters
$server   = "localhost:3307";
$database = "reporting";
$username = "root";
$password = "Qwerty.23";

// Establish a connection to the MySQL server
$mysqlConnection = mysqli_connect($server, $username, $password);

// Check if the connection was successful
if (!$mysqlConnection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Connection successful message
echo "Connection successful";

// Select the database to work with
$select_db = mysqli_select_db($mysqlConnection, $database);

// Check if the database selection was successful
if (!$select_db) {
    die("Database selection failed: " . mysqli_error($mysqlConnection));
}

// Perform a query to retrieve all items from the 'items' table
$result = mysqli_query($mysqlConnection, "SELECT * FROM items");

// Check if the query was successful
if (!$result) {
    die("Query failed: " . mysqli_error($mysqlConnection));
}

// Loop through the result set and display each item's ID, name, and price
while ($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row['id'] . " Name: " . $row['name'] . " " . $row['price'] . "<br>";
}

// Free the result set
mysqli_free_result($result);

// Close the database connection
mysqli_close($mysqlConnection);
?>
