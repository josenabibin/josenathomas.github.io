<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID, title, author, price FROM books";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
	$rs = "";
     // output data of each row
     while($row = $result->fetch_assoc()) {
$rs = $rs . "<tr> <td> " . $row["ID"] . "</td><td>" . "</td> <td> " . $row["title"] . "</td> <td> " . $row["author"] . "</td> <td>" . $row["price"] . "</td></tr>";

     }
	
	echo $rs;
	
	
} else {
	echo $sql;
}


?>		
