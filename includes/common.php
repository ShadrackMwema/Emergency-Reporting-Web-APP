<?php

$server   = "localhost:3307";
$database = "reporting";
$usernm = "root";
$passwrd = "Qwerty.23";

$mysqlConnection = new mysqli($server, $usernm, $passwrd,$database);
session_start();




?>
