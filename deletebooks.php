<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";


$id = $_POST["id"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM books WHERE ID = '" . $id . "'";


if ($conn->query($sql) === TRUE) {
 	echo "successful";
} else {
 	echo "unsuccessful";
}

?>		
