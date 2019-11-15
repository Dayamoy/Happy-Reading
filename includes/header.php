<?php  
require 'config/config.php';
// include("includes/classes/User.php");
// include("includes/classes/Post.php");


if (isset($_SESSION['username'])) {
	$userLoggedIn = $_SESSION['username'];
	$user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username='$userLoggedIn'");
	$user = mysqli_fetch_array($user_details_query);
}
else {
	header("Location: register.php");
}

?>

<html style="height: 0; width: 0;">
<head>
	<title>Happy Reading</title>

	<!-- Javascript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/bootbox.min.js"></script>
	<script src="assets/js/demo.js"></script>

	<!-- CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>
<body>

	<div class="top_bar"> 

		<div class="logo">
			<a href="index.php">Happy Reading!</a>
		</div>


		<div class="topnav">
			<nav>
			  <li> <a href="<?php echo $userLoggedIn; ?>">
				<?php echo $user['first_name']; ?>
			</a> </li>
			  <li> <a href="index.php">Home</a> </li>
			  <li> <a href="#">Notifications</a> </li>
			  <li> <a href="#">Settings</a> </li>
			  <li> <a href="includes/handlers/logout.php">
				Log Out
			</a> </li>
			</nav>
		</div>

	</div>


	<div class="wrapper">