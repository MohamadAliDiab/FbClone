<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from themified.com/friend-finder/edit-profile-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Sep 2021 15:06:26 GMT -->
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>Edit Profile</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="../css/bootstrap.min.css" />
		<link rel="stylesheet" href="../css/style.css" />
		<link rel="stylesheet" href="../css/ionicons.min.css" />
    <link rel="stylesheet" href="../css/font-awesome.min.css" />
    
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="../images/fav.png"/>
	</head>
  <body>

    <!-- Header
    ================================================= -->
		<header id="header">
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <a class="navbar-brand" href="edit-profile.php"><img src="../images/logo.png" alt="logo" /></a>
          </div>


        </div><!-- /.container -->
      </nav>
    </header>
    <!--Header End-->

    <div class="container">
              <div class="edit-profile-container">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-android-checkmark-circle"></i>Edit basic information</h4>
                </div>
                <div class="edit-block">
                  <form name="basic-info" id="basic-info" class="form-inline" method="POST">
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="firstname">First name</label>
                        <input required id="first_name" class="form-control input-group-lg" type="text" name="first_name" title="Enter first name" placeholder="First name">
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="lastname" class="">Last name</label>
                        <input required id="last_name" class="form-control input-group-lg" type="text" name="last_name" title="Enter last name" placeholder="Last name" >
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="email">My email</label>
                        <input required id="email" class="form-control input-group-lg" type="email" name="email" title="Enter Email" placeholder="My Email">
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="bday">Date of birth</label>
                        <input required id="bday" class="form-control input-group-lg" type="date" name="bday">
                      </div>
                    </div>
                    
                      <button id="save_changes" type="submit" class="btn btn-primary">Save Changes</button>
                    
                  </form>
                  <a href="home.php">
                  <button id="back" type="button" class="btn btn-primary mt-3">Back to Home-page</button>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-2 static">
            </div>
          </div>
        </div>
      </div>
    </div>

    
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
    <script src="../js/edit-info.js"></script>
    
  </body>

</html>
