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
    <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
      <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
      <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

    <script>
    $('#flat-slider').slider({
        orientation: 'horizontal',
        range:       true,
        values:      [17,67]
    });
    </script>
</head>

<body id="page-top">

    <nav id="resultheader" class="navbar navbar-default navbar-static-top">
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
                        <a data-toggle="dropdown" class="dropdown-toggle page-scroll" href="#"><i class="glyphicon glyphicon-plus-sign"></i> ADD PROPERTY</a>
                        <ul class="dropdown-menu">
                                <li><a href="#">Room</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Parking</a></li>

                            </ul>
                    </li>
                    <li>
                        <a class="page-scroll" href="#"><i class="fa fa-list-ul"></i> Your LIST</a>
                    </li>
                    <li>
                        <a href="#" class="page-scroll"><i class="fa fa-weixin"></i> MESSAGES</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle page-scroll"><img class="avatar" src="img/user.jpg"></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Account Setting</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Edit Profile</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Log out</a></li>
                            </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
