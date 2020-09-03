<html>
<body>



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
$first_name =  $_POST['name'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];



$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES('$first_name', '$last_name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>
