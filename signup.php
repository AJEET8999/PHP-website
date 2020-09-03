<html>
<head>
<style>
body{
	background-color:rgb(153, 153, 255);
	
}
main {
  height:45vh;
  width: 22vw;
  margin: 12vw 30vw auto 37vw;
  
  transition-duration: 0.4s;
  cursor: pointer;
  font-size: 30px;
  color: blue;
  text-align:center;
  border-radius: 15%;
  background-color:rgb(230, 230, 230);
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
main:hover {
  background-color:rgb(217, 217, 217);
}
#submitbutton{
	height:7vh;
	width: 15vw;
	background-color:rgb(204, 204, 255); 
	border-radius:20%;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
    margin: 0.3vw auto auto 0.5vw; 
	font-size: 10px; 
	color:blue;
}
#main1{
	margin: 1vw 2vw 2vw 2vw;
}

</style>
</head>
<body>



<main>
<div id ="main1">

<?php

$db = mysqli_connect("localhost", "root", "1234", "uap");

$username =  $_POST['name'];
$password = $_POST['password1'];
$email = $_POST['email'];

$result = mysqli_query($db, "SELECT * FROM username_and_password WHERE username LIKE '" .$username. "' ");	
		$count  = mysqli_num_rows($result);

   if($count == 0){
   	
	$sql = "INSERT INTO username_and_password (username, email, passcode)
VALUES('$username', '$email', '$password')";

if ($db->query($sql) === TRUE) {
    echo "New account created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

$db->close();

?>  
         
<h2>Click below to go to </h2>
<form action ="home.php">
<button id="submitbutton" type="submit" name="submit"><h1>HOME PAGE</h1></button>
</form> 
<?php
   }
   
  

?>


</div>
</main>

</body>
</html>
