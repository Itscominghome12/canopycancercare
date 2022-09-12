

<?php
    include("setup.php");?>

<!DOCTYPE html>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Search</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
    
<h2>HTML Forms</h2>

<form action="search_action.php">
  <label for="fname">First name:</label><br>
  <input type="query" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="query" id="lname" name="lname" value="Doe"><br><br>
  <input type="submit" value="Submit">
</form> 
    
    <form action="search_action.php" method="GET">
	<input type="text" name="query" />
	<input type="submit" value="Search" />
</form>
    
</body>
</html>