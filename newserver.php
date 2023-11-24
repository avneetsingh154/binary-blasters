<?php
// Establish a MySQL database connection
$servername = "localhost";
$username = "your_mysql_username";
$password = "your_mysql_password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve location data from the AJAX request
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

// Insert location data into the MySQL database
$sql = "INSERT INTO locations (latitude, longitude) VALUES ('$latitude', '$longitude')";
if ($conn->query($sql) === TRUE) {
    echo "Location data stored successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>