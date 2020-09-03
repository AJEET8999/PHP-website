<HTML>
<head>
<title> ARTIST's    heART </title>
	<link rel="icon" type="image/ico" href="logo.png" />
<style>

body{
  background: #5B2C6F;
margin:0;
padding0;
}
.header
{  position:fixed;
top:0;
width:100%;
height: 18vh;
font-size:40px;
background-color: black;

text-align:center;
color:white;
}
main{
	border:solid;
	margin : 12vw 5vw 5vw 5vw;
	width: 90vw; 
	 display: flex;
  flex-wrap: wrap;
}

#aboutuser{
	border:solid;
	width:40vw;
	height:75vh;
	margin: 2vw 5vw 2vw 25vw;
	text-align: center
}
#goback{
	margin: auto auto auto auto;
	position:fixed;
	top:0%;
	width:10vw;
	border: 2px solid black;
  background-color: white;
  color: black;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
}
#goback:hover {
  background-color: red;
  color: white;
}


</style>

</head>
<body>
<body>
  <div class="header">
ARTIST's    heART<img src="logo.png" >
</div>
<main>
<div id ="aboutuser">
<img id="userimage" src ="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/220px-User_icon_2.svg.png">

<?php
$username = $_GET["username"];
	$db = mysqli_connect("localhost", "root", "1234", "uap");
$result = mysqli_query($db, "SELECT email FROM username_and_password WHERE username LIKE '" .$username. "'  " );
	
?>
<h2>USERNAME : <?php echo $username  ?>  </h2>
<h2>E-MAIL : <?php  while ($row = mysqli_fetch_array($result)){  echo "<b>".$row['email']."</b>";   } ?>  </h2>

<form method = "post" >
<h3>Change email:</h3>
<input type="email" name="updateemail" placeholder = "Enter your new email"></br>

<button type = "submit" name="submitemail">UPDATE</button>
</form>
<form method = "post" >
<h3>Change Password:</h3>
<input type="password" name="updatepassword" placeholder = "enter your new password"></br>

<button type = "submit" name="submit">UPDATE</button>
</form>
<?php  
if(isset($_POST['submit'])){
	$update = mysqli_query($db, "UPDATE username_and_password SET passcode='" .$_POST['updatepassword']. "' WHERE username LIKE '" .$username. "'  " );
    ?>  <script>alert('Your password is updated')</script>   <?php
	

}

if(isset($_POST['submitemail'])){
	$update = mysqli_query($db, "UPDATE username_and_password SET email='" .$_POST['updateemail']. "' WHERE username LIKE '" .$username. "'  " );
    ?>  <script>alert('Your email is updated')</script>   <?php

}

?>
</div>
</main>
<button id="goback" onclick="goBack()">Go Back</button>
<script>
function goBack() {
  window.history.back();
}
</script>
</body>
</HTML>


