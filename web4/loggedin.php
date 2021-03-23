<?php
  if (isset($_COOKIE['uname']) && isset($_COOKIE['pass'])) {
  	echo 'User:'. $_COOKIE['uname'] . '<br>Password:' . $_COOKIE['pass']. '<br>';
  } else {
  	header('Location : anotherpage.php');
  }
  
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged In</title>
</head>
<body>
    You are logged in and can access all pages on this web site. <br> <a href="anotherpage.php">
    <br>Visit another page on this site?</a>
</body>
</html>