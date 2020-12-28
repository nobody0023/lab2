<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "testdb"; //повинна бути створена в субд

$conn = new mysqli($servername, $username, $password, $database);

if (!$conn){
    die('Error querying database.');
}


