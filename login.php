


<?php

session_start();
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Add new patients</title>
 <link href="css/style.css" type="text/css" rel="stylesheet">   
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    
    </head>
    
    <body>


<?php
$username=$_POST['username'];
$password=$_POST['password'];
$con=@mysql_connect("localhost","root","deepak") or die(mysql_error());
$db=@mysql_select_db("ang",$con)or die(mysql_error());

$sql="SELECT * FROM users WHERE username='$username' and password='$password'";

$result=mysql_query($sql);

$count=mysql_num_rows($result);

if($count<1){echo "Wrong Username or Password";}
        else{
      
		$_SESSION[user]=$username;
		header("Location:home.html");
	}

ob_end_flush();
?>
    </body></html>