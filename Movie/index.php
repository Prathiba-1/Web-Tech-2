<!DOCTYPE html>
<html lang="en">

<head>

    <title>MovieShaala</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!--Materialize -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">

    <!--Semantic UI-->
    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/moviemagic.css" rel="stylesheet">
	
	<!--php-->
	<?php session_start();?>

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    
    <style>
        #invisible {
            display: none;
        }
    </style>

</head>

<body>

    <!-- Navigation -->
    <nav class="ui secondary  menu" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                    
                </button>
                <a class="navbar-brand" href="index.php"><span><!--LOGO--></span></a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav" id="left-nav">
                   <!-- <li>
                        <a href="lang-hindi.php">HINDI</a>
                    </li>
                    <li>
                        <a href="lang-english.php">ENGLISH</a>
                    </li>
                    -->
                    
                </ul>
                <ul class="nav navbar-nav navbar-right">
                <!-- chat bot -->
                    <li>
                        <a href="chatbot_index.html"><span class="fa fa-question-circle" aria-hidden="true"></span>HELP</a>
                    </li>
                <!-- session handeling -->
					<?php 
					if(!isset($_SESSION["user_name"])) {
                    
					echo '<li id="visible">
                        <a href="#loginModal" data-toggle="modal" data-target="#loginModal"><span class="fa fa-sign-in" aria-hidden="true"></span>&nbsp;&nbsp;SIGN IN</a>
                    </li>';
					}
					else {
						echo '
				        <li id="visible" class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-user" aria-hidden="true"></span>&nbsp;&nbsp;YOU&nbsp;&nbsp;<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="profile.php"><span class="fa fa-cog" aria-hidden="true"></span>&nbsp;&nbsp;Profile</a></li>
                                <li><a href="bin/logout.php"><span class="fa fa-sign-out" aria-hidden="true"></span>&nbsp;&nbsp;Sign Out</a></li>
                            </ul>
						</li>
						';
					}
					?>
                                       
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
    <!-- Login modal -->
    <div id="loginModal" class="modal fade" role="dialog" style="background:#52BE80">
        <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
        <div class="section"></div>

<h5 class="green-text">Login</h5>
<div class="section" ></div>

<div class="container">
  <div class="z-depth-5 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

    <form class="col s12" method="post">
      <div class='row'>
        <div class='col s12'>
        </div>
      </div>

      <div class='row'>
        <div class='input-field col s12'>
          <input class='validate' type='email' name='email' id='email' />
          <label for='email'>Enter your email</label>
        </div>
      </div>

      <div class='row'>
        <div class='input-field col s12'>
          <input class='validate' type='password' name='password' id='password' />
          <label for='password'>Enter your password</label>
        </div>
        <label style='float: right;'>
                          <a class='pink-text' href='#!'><b>Forgot Password?</b></a>
                      </label>
      </div>

      <br />
      <center>
        <div class='row'>
          <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect green'>Login</button>
        </div>
      </center>
    </form>
  </div>
</div>
<p class="green-text" href="#!">Create account</p>
        </div>
        <!--<div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login </h4>
            </div>
            <div class="modal-body">
                 <form class="form" action="bin\login.php" method="post" id="signin" value="login">
                     <div class="row">
                        <div class="col-xs-8 col-xs-offset-2">
                            <div class="form-group">
                                <label for="Email">Email address</label>
                                <input type="email" class="form-control" id="Email" aria-describedby="Email" placeholder="Enter email" name="Email" value="menaka.ravi23@gmail.com">
                            </div>
                        </div>
                        <div class="col-xs-8 col-xs-offset-2">
                            <div class="form-group">
                                <label for="Password">Password</label>
                                <input type="password" class="form-control" id="Password" placeholder="Password" name="Password" value="menu123">
                            </div>
                        </div>
                     </div>
                    <div class="row"><p style="padding:10px;"></p></div>
                    <div class="row">
                        <div class="col-xs-8 col-xs-offset-2">
                            <button type="submit" class="btn btn-danger btn-block" value="login" id="submitForm" name="login">Sign In</button>
                            <button type="button" class="btn btn-default btn-block" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                    <br>
                </form>
              
                <br>
                <p class="center-align bold text-muted">Still not connected?
                    <a href="signup.php" class="text-danger">Sign up</a> here!
                </p>
            </div>
        </div>-->
        </div>
    </div>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('img/movie_icon.jpg');"><img src="img/mov_icon3.jpg" alt="">
</div>
                <div class="carousel-caption">
                    <h2 style="padding : 0 0 0 40px">Book tickets</h2>
                    
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('bin/display_poster.php?MovieName=Anna');"><img src="img/mov_icon2.jpg" alt=""></div>
                <div class="carousel-caption">
                    <h2>Coming Soon</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('bin/display_poster.php?MovieName=Koi Aane Parnavo');"><img src="img/mov_icon1.jpg" alt=""></div>
                <div class="carousel-caption">
                    <h2>Check Ratings</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- ALL MOVIES -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Movies</h2>
            </div>

            <div class="col-md-3 col-sm-6">
                    <img class="img-responsive img-portfolio img-hover" src="img/cs-avengers.jpg" alt="">
            </div>
            <div class="col-md-3 col-sm-6">
                    <img class="img-responsive img-portfolio img-hover" src="img/cs-bp.jpg" alt="">
            </div>
            <div class="col-md-3 col-sm-6">
                    <img class="img-responsive img-portfolio img-hover" src="img/cs-strange.png" alt="">
            </div>
            <div class="col-md-3 col-sm-6">
                    <img class="img-responsive img-portfolio img-hover" src="img/cs-captain.png" alt="">
            </div>
        </div>

        <!-- /.row -->

        <br><br><br>
        
    </div>
    <!-- /.container -->
    </div>
    
    <footer>
        <div>
            <h5> Find us on: </h5>
            <div class="col-xs-12 col-sm-4">
                <div class="nav navbar-nav" style="padding: 40px 10px;">
                    <a class="btn btn-social-icon btn-google-plus" href="http://plus.google.com"><i class="fa fa-google-plus fa-2x"></i></a>
                    <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com"><i class="fa fa-facebook fa-2x"></i></a>
                    <a class="btn btn-social-icon btn-youtube" href="http://youtube.com/"><i class="fa fa-youtube fa-2x"></i></a>
                </div>
            </div>
                
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
