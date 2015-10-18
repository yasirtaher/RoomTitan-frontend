<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Room Titan</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/titan.css" type="text/css">



</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">LOGO</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#"><i class="glyphicon glyphicon-plus-sign"></i> ADD PROPERTY</a>
                    </li>
                    <li>
                        <a class="page-scroll" data-toggle="modal" data-target="#login-modal" href="#">Login</a>
                    </li>
                    <li>
                        <a href="#" class="page-scroll btn-white btn-outline"  data-toggle="modal" data-target="#join-modal">Join Us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Find your best match</h1>
                <br>
                <p>We make easy to find your new home or parking lot</p>
                
<div class="container">
   
    <div class="row">
    <div class="col-md-2 col-sm-0 col-xs-0"></div>
    <div class="searchbox col-md-6 col-sm-12 col-xs-12">

               <div class="panel with-nav-tabs col-md-10 col-sm-12 col-xs-12">
                <div class="panel-heading2 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs">
                        <li class="tab1 col-md-4 col-sm-4 col-xs-12 active"><a href="#tab1default" data-toggle="tab">ROOM</a></li>
                        <li class="tab2 col-md-4 col-sm-4 col-xs-12"><a href="#tab2default" data-toggle="tab">ROOMMATE</a></li>
                        <li class="tab3 col-md-4 col-sm-4 col-xs-12"><a href="#tab3default" data-toggle="tab">PARKING</a></li>
                    </ul>
                </div>
  
               <!--  <div class="panel-body"> -->
                    <div class="tab-content col-md-12 col-sm-12 col-xs-12">

                        <div class="tab-pane fade in active" id="tab1default">
                            <div class="input-group">
                                <span class="input-group-btn send"><img style="width:30px" src="img/send.png"></span>
                                <input type="text" class="form-control" placeholder="Location or Zip Code" id="searchTerm" name="searchTerm" value='' required>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab2default">
                            <div class="input-group">
                                <span class="input-group-btn send"><img style="width:30px" src="img/send.png"></span>
                                <input type="text" class="form-control" placeholder="Search for..." id="searchTerm" name="searchTerm" value='' required>
                            </div>
                        </div>

                        <div class="tab-pane fade in" id="tab3default">
                            <div class="input-group">
                                <span class="input-group-btn send"><img style="width:30px" src="img/send.png"></span>
                                <input type="text" class="form-control" placeholder="Search for..." id="searchTerm" name="searchTerm" value='' required>                                
                            </div>
                        </div>

                    </div>
                <!-- </div>  -->
                 
            </div>             
             <div style="text-align:center;">
                <button class="btn btn-titan col-md-2 col-sm-4 col-xs-10"><i class="glyphicon glyphicon-search"></i></button></div>
            </div>
            <div class="col-md-3 col-sm-0 col-xs-0"></div>
    </div>
</div>

<br/>


            </div>
        </div>
    </header>




<!-- START LOGIN MODAL -->
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="loginmodal-container">
                <h1>Login to Your Account</h1><br>
                <form>
                    <input type="text" name="user" placeholder="Username">
                    <input type="password" name="pass" placeholder="Password">
                    <input type="submit" name="login" class="login loginmodal-submit" value="Login">
                </form>
                    
                <div class="login-help">
                    <a href="#">Register</a> - <a href="#">Forgot Password</a>
                </div>
            </div>
        </div>
    </div>
<!-- END LOGIN MODAL -->

<!-- START JOIN MODAL -->
   <div class="modal fade" id="join-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="loginmodal-container">
                <!-- <h1>Login to Your Account</h1><br> -->
                <div class="mainform">
                <div class="fbjoin">
                    <a href="#"><img src="img/facebook.png">  Sign Up with Facebook</a>
                </div>
                <div class="joinform">
                <a href="#"><img src="img/envelope.png">  Sign Up with Email</a>
                <form>
                    <input type="text" name="email" placeholder="e-mail">
                    <input type="password" name="pass" placeholder="password">
                    <input type="submit" name="login" class="loginmodal-submit " value="sign up">
                </form>

                </div>
                <div class="jointext">
                    <br>
                    <p>By signing up, I agree to RoomTitan's <a href="#">Term of service</a> and <a href="#">Privacy Policy</a></p>
                    <p>Already a RoomTitan member? <a href="#">Log in</a></p>
                </div>
                </div>
            </div>
        </div>
    </div>
<!-- END JOIN MODAL -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>



<script type="text/javascript">
    $(function() {

    $('#room-form-link').click(function(e) {
        $("#room-form").delay(100).fadeIn(100);

        $("#roommate-form").fadeOut(100);
        $("#parking-form").fadeOut(100);
        
        $('#parking-form-link').removeClass('active');
        $('#roommate-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#roommate-form-link').click(function(e) {
        $("#roommate-form").delay(100).fadeIn(100);
        $("#room-form").fadeOut(100);
        $("#parking-form").fadeOut(100);

        $('#room-form-link').removeClass('active');
        $('#parking-form-link').removeClass('active');

        $(this).addClass('active');
        e.preventDefault();
    });
     $('#parking-form-link').click(function(e) {
        $("#parking-form").delay(100).fadeIn(100);
        $("#room-form").fadeOut(100);
        $("#roommate-form").fadeOut(100);
        $('#room-form-link').removeClass('active');
        $('#roommate-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });

});

</script>
</body>
</html>
