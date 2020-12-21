<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cars";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
$id = $_REQUEST["id"];

$sql = "DELETE FROM basic_info WHERE id=$id ";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header("Location: register.php");
} else {
    echo "Error deleting record: " . $conn->error;
}



$conn->close();
?> 