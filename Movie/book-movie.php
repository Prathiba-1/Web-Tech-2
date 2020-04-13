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
    <link href="css/booking.css" rel="stylesheet">
	
	<!--php-->
	<?php session_start();?>

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

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
                        <a href="chatbot.php"><span class="fa fa-question-circle" aria-hidden="true"></span>HELP</a>
                    </li>
                
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
    <div id="loginModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
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
        </div>
        </div>
    </div>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Book Now</h1>
            </div>
        </div>
     
        <br>
        
        <!-- BookMovie Form -->
        <div class="row">
            <div class="col-md-8">
                <form name="bookingForm" id="bookingForm" action="success.php" method="post" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Choose The Show Timings:</label>
                            <select class="form-control" id="timing" name="timing" required>
                                <option name="timing1" selected>1:00 PM</option>
                                <option name="timing2">2:00 PM</option>
                                <option name="timing3">3:00 PM</option>
                                <option name="timing4">4:00 PM</option>
                            </select>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Number of tickets:</label>
                            <input type="number" min="1" max="10" class="form-control" id="ticket" value="1" required>
                        </div>
                    </div>
                    <div id="visible">
                        <button type="button" id="btnTicket" class="ui olive button">Confirm &raquo;</button>
                    </div>
                    <div id="invisible">
                        <p><strong>Choose seats: </strong></p>
                        <div id="holder"> 
                            <ul  id="place">
                            </ul>    
                        </div>
                        <div> 
                            <ul id="seatDescription" style="list-style-type:none;">
                                <li><span><img src="img/seat-empty.png" height="24px"></span> Available Seat</li>
                                <li><span><img src="img/seat-booked.png" height="24px"></span> Booked Seat</li>
                                <li><span><img src="img/seat-selected.png" height="24px"></span> Selected Seat</li>
                            </ul>
                        </div>
                        <br>
                                            
                        <br>
                        <h3 class="text-center" style="min-height:100px;">
                        <strong>Total Amount:</strong>
                        <p id="amount">&#8377; 200.00</p>
                        </h3>

                        <div id="success"></div>
                        <!-- For success/fail messages -->
                        <br><br>
                        <button type="submit" id="btnBook" class="ui olive button"  >Book Tickets</button>                    

                        <div id="success"></div>
                        <!-- For success/fail messages -->
                    </div>
                </form>
            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
    
    <div>
        <p style="padding:50px;"></p>
    </div>
    


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/sign_up.js"></script>
    <script src="js/booking.js"></script>

</body>

</html>