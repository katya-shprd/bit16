<?php
/*
	file:	admin/index.php
	desc:	Display the admin page if user is logged in
			checks that user is logged in and prevents 
			the page to be  saved any cache, proxy etc
*/
if(!empty($_GET['page'])) $page=$_GET['page'];else $page='';
session_start();
if(!isset($_SESSION['userID'])) header('location:../user.php');
header('Cache-control:no-store,no-cache,must-revalidate');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="footer, address, phone, icons" />
		<link href="css/mystyle.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="js/login.js"></script>

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		
		<title>Admin site</title>
		<!-- Bootstrap core CSS -->
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<!--jQuery-->
		<script src="../js/jquery-3.2.1.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/myapp.js"></script>
	</head>

	<body>
		<div class="container">
		 <div class="panel panel-default container">
	     <span class="heading-2">Ourstories - Admin site</span>
		  <p>
			<a href="index.php">Admin home</a>
			<a href="index.php?page=users">Users</a>
			<a href="index.php?page=communities">Communities</a>
			<a href="index.php?page=stories">Stories</a>
			<a href="index.php?page=companies">Companies</a>
			<a href="index.php?page=activities">Activities</a>
			<a href="index.php?page=chpwd"><?php echo $_SESSION['name']?></a>
			<a href="logout.php">Logout</a>
		  </p>
		 </div>
		
		<?php
			if($page=='') echo '<p>Welcome to admin site</p>';
			if($page=='chpwd') include('changepassword.php');
			if($page=='users') include('users.php');
			if($page=='communities') include('communities.php');
			if($page=='companies') include('companies.php');
			if($page=='stories') include('stories.php');
			if($page=='activities') include('activities.php');
			if($page=='edituser') include('edituser.php');
			if($page=='removeuser') include('removeuser.php');
			if($page=='editcommunity') include('editcommunity.php');
			if($page=='removecommunity') include('removecommunity.php');
			if($page=='editcompany') include('editcompany.php');
			if($page=='removecompany') include('removecompany.php');
			if($page=='editstory') include('editstory.php');
			if($page=='removestory') include('removestory.php');
			if($page=='editactivity') include('editactivity.php');
			if($page=='removeactivity') include('removeactivity.php');

		?>
		</div>
	</body>
</html>
