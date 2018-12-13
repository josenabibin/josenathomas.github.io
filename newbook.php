<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";


$id = $_POST["id"];
$title = $_POST["title"];
$author =  $_POST["author"];
$price =  $_POST["price"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO books (ID, title, author, price)
VALUES (" . "'" . $id . "'" . "," . "'" . $title . "', '" . $author . "', '" . $price  .  "')";


if ($conn->query($sql) === TRUE) {
 	echo "successful";
} else {
 	echo "unsuccessful";
}

?>		
