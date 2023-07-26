<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<style>
      ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

	 
	</style>
	<title>My website</title>
</head>
<body>
<div class="d-flex flex-column justify-content-center bg">
<div>
<div class="d-flex flex-column justify-content-center card">
     <ul>
      <li><a href="index1.html">5 days wf</a></li>
	<li><a href="logout.php">Logout</a></li>
     </ul>
	
	<h1 class="head"> Hello, <?php echo $user_data['user_name']; ?> </h1>
<br>
	
</div>
</div>
</div>
</body>
</html>