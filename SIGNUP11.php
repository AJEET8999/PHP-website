
<!DOCTYPE html>
<html>
<head>
	<title> ARTIST's    heART </title>
	<link rel="icon" type="image/ico" href="logo.png" />
	
<style>
#signup{
	text-align:center;
	font-size:50px;
}
body{
	background-color:rgb(153, 153, 255);
}
main {
  height:70vh;
  width: 22vw;
  margin: 3.5vw 30vw auto 37vw;
  
  transition-duration: 0.4s;
  cursor: pointer;
  font-size: 15px;
  text-align:left;
  border-radius: 15%;
  background-color:rgb(230, 230, 230);
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
main:hover {
  background-color:rgb(217, 217, 217);
}
input{
	height:3vh;
	width: 13vw;
	border:none;
	border-radius:10%;
}
#submitbutton{
	height:7vh;
	width: 15vw;
	background-color:rgb(204, 204, 255); 
	border-radius:20%;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
    margin: 2.2vw auto auto 0.5vw; 
	font-size: 10px; 
	color:blue;
}

#signupform
{    
	margin: auto auto auto 3vw;
}


</style>	
	 <script> 
       
     function checkPassword(form) { 
                password1 = form.password1.value; 
                password2 = form.password2.value; 
  
                
          if (password1 == '') 
                    alert ("Please enter Password"); 
                      
          
          else if (password2 == '') 
                    alert ("Please enter confirm password"); 
                       
         else if (password1 != password2) { 
                    alert ("\nPassword did not match: Please try again...") 
                    return false; 
                } 
  
          
                
            } 
        </script> 
</head>
<body>
<h1 id="signup">Create your New Account</h1>
<main>
<h1 style="text-align:center">Sign Up</h1><br/>
<form id="signupform" method="post" onSubmit = "return checkPassword(this)" action = "signup.php">

<H3>Username:</H3>
<input type ="text" name="name" placeholder="Username" required min="10"><u></u></input></br>
<H3>Email:</H3>
<input type ="email" name="email" placeholder="E-mail" required ></input></br>
<H3>Password:</H3>
<input type ="password" name="password1" min="10" placeholder="Password" required ></input></br>
<H3>Confirm Password:</H3>
<input type ="password" name="password2" min="10" placeholder="Confirm Password" required ></input></br>
<button id="submitbutton" type="submit" name="submit"><h1>SUBMIT</h1></button>
</form>
  

</main>


</body>
</html>
