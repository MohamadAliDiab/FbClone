<?php
    include("connection.php");
    session_start();
    $user_id = $_SESSION["id"];
    $gender = $_SESSION["gender"];
    if(!(isset($_SESSION['logged_in']))){
      header("Location: ../index.html");
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themified.com/friend-finder/timeline-about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Sep 2021 15:06:20 GMT -->

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="This is social network html5 template available in themeforest......" />
  <meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
  <meta name="robots" content="index, follow" />
  <title>FriendFinder | Home</title>

  <!-- Stylesheets
    ================================================= -->
  <link rel="stylesheet" href="../css/bootstrap.min.css" />
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/ionicons.min.css" />
  <link rel="stylesheet" href="../css/font-awesome.min.css" />



  <!--Favicon-->
  <link rel="shortcut icon" type="image/png" href="../images/fav.png" />
</head>

<body>

  <!-- Header
    ================================================= -->
  <header id="header">
    <nav class="navbar navbar-default navbar-fixed-top menu">
      <div class="container">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand" href="home.php"><img src="../images/logo.png" alt="logo" /></a>
        </div>

        <button type="button" class="btn btn-info" data-toggle="modal"
          data-target="#notifications">Notifications</button>
        <div class="modal fade" id="notifications" tabindex="-1" aria-labelledby="notifications" >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Notifications</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <table id="nots" class="table table-dark table-bordered text-dark mb-3">
                  
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <form class="navbar-form navbar-right hidden-sm">
          <div class="form-group">
            <i class="icon ion-android-search"></i>
            <input id="searchBar" type="text" class="form-control" placeholder="Search for connections">
          </div>
        </form>
        <div class="modal fade" id="searchRes" tabindex="-1" aria-labelledby="searchRes" >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Results</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <table id="res" class="table table-dark table-bordered text-dark mb-3">
                  
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container -->
    </nav>
  </header>
  <!--Header End-->
  <!--Notifications-->

  <div class="container">

    <!-- Timeline
      ================================================= -->
    <div class="timeline">
      <div class="timeline-cover">

        <!--Timeline Menu for Large Screens-->
        <div class="timeline-nav-bar hidden-sm hidden-xs">
          <div class="row">
            <div class="col-md-3">
              <div class="profile-info">
		
              <?php  if ($gender == "Male" || $gender == "male"){?>
								<img src="../images/Male.png" alt="profile pic" class="img-responsive profile-photo">
								<?php }else{ ?>
								<img src="../images/female.png" alt="profile pic" class="img-responsive profile-photo">
								<?php } ?>
							
              </div>
            </div>
          </div>
        </div>
        <!--Timeline Menu for Large Screens End-->

      </div>
      <div id="page-contents">
        <div class="row">
          <div class="col-md-3">
            <div class="container-fluid mt-5">
              <a href="edit-profile.php">
                <button type="button" class="btn btn-primary">Edit profile</button>
              </a>
              <a href="logout.php">
                <button type="button" class="btn btn-dark fa fa-sign-out mt-2">LOGOUT</button>
              </a>
            </div>
          </div>
          <div class="col-md-7">

            <!-- About
              ================================================= -->
            <div class="about-profile">
              <div class="about-content-block">
                <h3 class="border border-primary text-center fw-bold titles">First name</h3>
                <h5 class="container" id="first_name"></h5>
              </div>
              <div class="about-content-block">
                <h3 class="border border-primary text-center fw-bold titles">Last name</h3>
                <h5 class="container" id="last_name"></h5>
              </div>
              <div class="about-content-block">
                <h3 class="border border-primary text-center fw-bold titles">Birthday</h3>
                <h5 class="container" id="bday"></h5>
              </div>
              <div class="about-content-block">
                <h3 class="border border-primary text-center fw-bold titles">Gender</h3>
                <h5 class="container" id="gender"></h5>
              </div>
              <div class="about-content-block">
                <h3 class="border border-primary text-center fw-bold titles">Email</h3>
                <h5 class="container" id="email"></h5>
              </div>
            </div>
          </div>
          <div class="col-md-2 static">
            <div id="sticky-sidebar">
              <h4 class="grey">Friends count</h4>
              <div id="counter" class="text-center counting"> </div>
              <a href="friends-list.php">
                <div class="text-center mt-5">
                  Check all friends >>>
                </div>
              </a>
            </div>
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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
    integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
    integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous">
  </script>

  <script src="../js/jquery-3.1.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.sticky-kit.min.js"></script>
  <script src="../js/jquery.scrollbar.min.js"></script>
  <script src="../js/script.js"></script>
  <script src="../js/info.js"></script>
  <script src="../js/count-friend.js"></script>
  <script src="../js/notifications.js"></script>
  <scirpt src="../js/search.js"></script>

</body>


</html>