<?php

  session_start();
  $pass = md5('test');
  
  if(md5($_REQUEST['pass']) == $pass):
    $_SESSION['ppp_allowed'] = true;
    header('location: index.php');  
  else:
  
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="style.css" type="text/css" />
	<title>Password Protected</title>
	
</head>

<body>

  <div id="main-wrapper">
    
    <div id="header">
      
      <h1>Password Protected Page</h1>
      
      <em>Brief Site Description</em>
          
  </div>
  
  <form method="post" action="login.php">
    <label for="pass">Password:</label>
    <input type="password" name="pass" id="pass" />
    <input type="submit" />
  </form>

</body>
</html>
<?php endif ?>