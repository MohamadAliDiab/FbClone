<?php
    include("connection.php");
    session_start();
    $user_id = $_SESSION["id"];
?>

<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from themified.com/friend-finder/newsfeed-friends.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Sep 2021 15:05:28 GMT -->
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>Search results</title>

		<!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="../css/bootstrap.min.css" />
		<link rel="stylesheet" href="../css/style.css" />
		<link rel="stylesheet" href="../css/ionicons.min.css" />
    <link rel="stylesheet" href="../css/font-awesome.min.css" />
    
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png"/>
	</head>
  <body>

    <!-- Header
    ================================================= -->
		<header id="header">
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <a class="navbar-brand" href="search-results.php"><img src="../images/logo.png" alt="logo" /></a>
          </div>


            <form class="navbar-form navbar-right hidden-sm">
              <div class="form-group">
                <i class="icon ion-android-search"></i>
                <input type="text" class="form-control" placeholder="Search for connections">
              </div>
            </form>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    <!--Header End-->


    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>
    
    <!-- Scripts
    ================================================= -->
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.sticky-kit.min.js"></script>
    <script src="../js/jquery.scrollbar.min.js"></script>
    <script src="../js/script.js"></script>
    
  </body>

<!-- Mirrored from themified.com/friend-finder/newsfeed-friends.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Sep 2021 15:05:30 GMT -->
</html>
