<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "ajeet";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "
CREATE TABLE `tbl_uploads` (
`id` INT( 10 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`file` VARCHAR( 100 ) NOT NULL ,
`type` VARCHAR( 10 ) NOT NULL ,
`size` INT NOT NULL
) ENGINE = MYISAM ;";

if ($conn->query($sql) === TRUE) {
    echo "Table images created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>