<?php
include_once('validation.php');
include_once('ExamDAO.php');
?>

<html>
<head>
	<title>Sign in Page</title>
	<link type = "text/css" rel = "stylesheet" href = "css/bootstrap.css" >
	<link type = "text/css" rel = "stylesheet" href = "css/bootstrap.min.css" >
	<link type = "text/css" rel = "stylesheet" href = "css/myStyle.css" >
</head>
<body>
	<div class="span12">
		<div class="row">
			<div class="navbar navbar-fixed-top">
        		<div class="navbar-inner">
          			<div class="container">
            			<a  class="brand brand-bootbus"><img src="img/logo.png" width="80px"><font face="tolkien">&nbsp;La Verdad Online Examination</font></a>
            				<div class="nav-collapse collapse">        
              					<ul class="nav pull-right">
				                 <li><a href="signUp.php">Sign Up</a></li>           
				                 <li><a href="signIn.php">Sign In</a></li>
              					</ul>
            				</div>
          			</div>
        		</div>
      		</div>
      	</div>
     </div>
	<div class="row" style="margin-top:200px">
    <form method="POST" action="signInAunten.php" name="signin">
    <table align="center" style="margin-top:10px">
    <tr>
    	<td><b>Username:&nbsp;&nbsp;</td>
    	<td><input type="text" id="email" name="email" onblur="checkUser();" placeholder="Username" style="margin-right:67px;height:30px;" ></td>
    </tr>
    <tr>
    	<td><b>Password:&nbsp;&nbsp;</td>
    	<td><input type="password" id="pass" name="pass" placeholder="Password" style="margin-right:67px;height:30px;"></td>
    </tr>
	</table>
		<input type="submit" value="Sign in" class="btn btn-primary" onclick="return validate();" style="margin-left:708px;">
	</form>
</body>
</html>

<script>
function validate(){

	var a=document.forms["signin"]["user"].value;
	var b=document.forms["signin"]["pass"].value;

	if(a==null || a==""){
		alert("Error Username");
		return false;
	}
	if(b==null || b==""){
		alert("Wrong Password");
		return false;
	}
	
}
</script>