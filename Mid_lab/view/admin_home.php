<?php
include_once("../controller/sessioncheck.php");
require_once('../model/userModel.php');

$user = getUser($_SESSION['userId']); 
?>
<center>
	<h1>Welcome <?php echo $user['name'];?>!</h1>
	<a href="profile.php">Profile</a>
	<br/>
	<a href="change_password.php">Change Password</a>
	<br/>
	<a href="view_users.php">View Users</a>
	<br/>
	<a href="login.php">Logout</a>
</center>