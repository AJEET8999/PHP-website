<html>
<head>
<title> ARTIST's    heART </title>
	<link rel="icon" type="image/ico" href="logo.png" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
<style>
body{
  background: #5B2C6F;
margin:0;
padding0;
}
.posts{
	height:85vh;
	width: 25vw;
	margin: 2vw auto 5vw 2vw;
    text-align: center;
	border-radius: 10%;
	background-color: rgb(217, 217, 217);
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.posts:hover {
   background-color: rgb(204, 204, 204);
  
  
}
.image{
	height:43vh;
	width:23vw;
	border: solid;
	margin: 0.1vw 2vw 1vw 1vw;
	border-radius:10%;
}
.aboutimage{
	display:flex;
	border:solid;
	height:33vh;
	width: 23vw;
	border-radius:10%;
	margin: auto 2vw 1vw 1vw;
	padding: 1vw 1vw 1vw 1vw;
}
.aboutimg{
	
	width: 15vw;
	border:solid;
	font-size:20px;
	
}
.likedislike{
	display:grid;
	margin: auto auto auto 1.5vw;
	
	
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
	margin : 10vw 5vw 5vw 5vw;
	width: 90vw; 
	 display: flex;
  flex-wrap: wrap;
  background-color:rgb(149, 73, 182);
}
.postby{
	color:blue;
	font-size: 25px;
}
.fa {
  font-size: 50px;
  cursor: pointer;
  user-select: none;
  
}

.fa:hover {
  color: darkblue;
}



</style>
</head>
<body>
<div class="header">
ARTIST's    heART<img src="logo.png" alt="logo">
</div>

<button id="goback" onclick="goBack()">Go Back</button>
<script>
function goBack() {
  window.history.back();
}
</script>

<main>
<?php
$username = $_GET["username"];
$db = mysqli_connect("localhost", "root", "1234", "uap");
$result = mysqli_query($db, "SELECT * FROM images where username LIKE '".$username."' ");	
    while ($row = mysqli_fetch_array($result)) {
      echo "<div class='posts'>";
	     
	     echo "<p>::|IMAGE NAME : <b>".$row['image_name']."|::</b></p>";
		  
		  
		  
      	  echo "<img class='image' src='images/".$row['image']."' >";
		 
		 echo "<div class='aboutimage'>";
		 echo "<div class='aboutimg'>";
      	echo "<p>".$row['image_text']."</p>";
		echo "</div>";
		$likeresult = mysqli_query($db, "SELECT * FROM like_table WHERE image_name='" .$row['image_name']. "' ");	
		$like  = mysqli_num_rows($likeresult);
		$dislikeresult = mysqli_query($db, "SELECT * FROM dislike_table WHERE image_name='" .$row['image_name']. "' ");	
		$dislike  = mysqli_num_rows($dislikeresult);
		?>  
		<div class = "likedislike">
		<button class="btn btn-block btn-primary " onclick="myFunction()"> <i  class="fa " ><H4>LIKES</H4><?php echo $like; ?></i> </button>
              
            <button class="btn btn-block btn-danger" onclick="myFunction111()"> <i  class="fa"><H4>DISLIKES</H4><?php echo $dislike; ?></i>  </button>
       </div>
	   <?php
		echo "</div>";
		
		
      echo "</div>";
    }

?>
<script>
  function myFunction() {
  alert("You can only LIKE post on Home page");
}
function myFunction111() {
  alert("You can only DISLIKE post on Home page");
}
        </script>
		
</main>

</body>
</html>

