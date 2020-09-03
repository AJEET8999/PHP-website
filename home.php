<!DOCTYPE html>
<html>
<head>
<title> ARTIST's    heART </title>
	<link rel="icon" type="image/ico" href="logo.png" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>

</head>
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
	margin : 15vw 5vw 5vw 5vw;
	width: 90vw; 
	 display: flex;
  flex-wrap: wrap;
  background-color:rgb(149, 73, 182);
}

.menu{
 position: fixed;
top:7%;
left: 50%;
height:14vh;
transform: translate(-50%,-50%);
margin: 7vw auto auto auto;
padding: 15px 0;
background: #FDFEFE;
display: flex;
border-radius:10px;
box-shadow=0 10px 30px rgba(0,0,0,0.3);
}

.menu ul{
list-style:none;
text-align:center;
display: block;
border-right:1px solid rgba(0,0,0,.2);
}
.menu ul li:last-child
{
border-right:none;
}

.menu ul li a{
text-decoration:none;
padding:0 60px;
display:block;
}
.menu ul li a .icon
{
 width:35px;
height:35px;
text-align:center;
overflow: hidden;
margin:0 auto 10px;
}
.menu ul li a .icon .fa
{
 width:100%;
 height:100%;
line-height: 40px;
font-size:34px;
transition:0.5s;
color: #000;
}
.menu ul li a .icon .fa:last-child
{
  color:#5B2C6F;
}
.menu ul li a:hover .icon .fa
{
transform: translateY(-100%);
}
.menu ul li a .name
{
position:relative;
height:20px;
width:95px;
display: block;
overflow: hidden;
}

.menu ul li a .name span
{
display: block;
position:relative;
color: #000;
font-size:18px;
line-height:20px;

transition:0.5s;
}
.menu ul li a .name span:before
{
  content: attr(data-text);
  position: absolute;
  top: -100%;
left:0
width:100%;
height:100%;
color: #5B2C6F;

}
.menu ul li a:hover .name span
{
transform:translateY(20px)
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
.posts{
	height:80vh;
	width: 35vw;
	margin: 2vw auto 5vw 5vw;
    text-align: center;
	border-radius: 10%;
	background-color: rgb(217, 217, 217);
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.posts:hover {
   background-color: rgb(204, 204, 204);
  
  
}
.image{
	height:50vh;
	width:31vw;
	border: solid;
	margin: 0.1vw 2vw 1vw 2vw;
	border-radius:10%;
}
.aboutimage{
	display:flex;
	border:solid;
	height:22vh;
	width: 29vw;
	border-radius:10%;
	margin: auto 2vw 1vw 3vw;
	padding: 1vw 1vw 1vw 1vw;
}
.aboutimg{
	
	width: 19vw;
	border:solid;
	font-size:20px;
	
}
.likedislike{
	display:grid;
	margin: auto auto auto 1.5vw;
	
	
}


</style>
<body>
  <div class="header">
ARTIST's    heART<img src="logo.png" >
</div>
<nav class="menu">


<ul>
<li>
<a href="ABOUTUS.HTML">
<div class="icon">
<i class="fa fa-file-text" aria-hidden="true"></i>
<i class="fa fa-file-text" aria-hidden="true"></i></div>
<div class="name"><span data-text="About Us">About Us</span></div>
</div>
</a>
</li>
</ul>
<ul>
<li>
<a href="CONTACTUS.HTML">
<div class="icon">
<i class="fa fa-mobile" aria-hidden="true"></i>
<i class="fa fa-mobile" aria-hidden="true"></i></div>
<div class="name"><span data-text="Contact Us">Contact Us</span></div>
</a>
</li>
</ul>
<ul>
<li>
<a href="TEAMS.HTML">
<div class="icon">
<i class="fa fa-users" aria-hidden="true"></i>
<i class="fa fa-users" aria-hidden="true"></i></div>
<div class="name"><span data-text="Teams">Teams</span></div>
</a>
</li>
</ul>
<ul>
<li>
<a href="signin.html">
<div class="icon">
<i class="fa fa-sign-in" aria-hidden="true"></i>
<i class="fa fa-sign-in" aria-hidden="true"></i></div>
<div class="name"><span data-text="Log-In">Log-In</span></div>
</a>
</li>
</ul>

</nav>
<main>




<?php

	$db = mysqli_connect("localhost", "root", "1234", "uap");
$result = mysqli_query($db, "SELECT * FROM images");	
    while ($row = mysqli_fetch_array($result)) {
      echo "<div class='posts'>";
	     
	     echo "<p>--|POST BY :<b>".$row['username']."</b>|:--:|IMAGE NAME : <b>".$row['image_name']."|:--</b></p>";
		  
		  
		  
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
		<button class="btn btn-block btn-primary" onclick="myFunction()" > <i  class="fa fa-thumbs-up" ><?php echo $like; ?></i> </button>
              
            <button class="btn btn-block btn-danger" onclick="myFunction111()"> <i  class="fa fa-thumbs-down"><?php echo $dislike; ?></i>  </button>
       </div>
	   <?php
		echo "</div>";
		
		
      echo "</div>";
    }
?>
	<script>
  function myFunction() {
  alert("Sign In first to LIKE this post");
}
function myFunction111() {
  alert("Sign In first to DISLIKE this post");
}
        </script>


</main>