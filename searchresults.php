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
                        <a class="page-scroll" href="#"><i class="glyphicon glyphicon-plus-sign"></i> ADD PROPERTY</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#"><i class="fa fa-list-ul"></i> Your LIST</a>
                    </li>
                    <li>
                        <a href="#" class="page-scroll"><i class="fa fa-weixin"></i> MESSAGES</a>
                    </li>
                    <li>
                        <a href="#" class="page-scroll"><img class="avatar" src="img/user.jpg"></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="searchcriteria col-md-12" style="height:100px">
                
                      <div class="col-md-2">
                          <span>Budget <br></span>
                          <div class="flat-slider" id="flat-slider"></div>
                         
                      </div>

                      <div class="col-md-2" style="background-color:#fff;height:10px">
                          <span>Furnished <br><i class="fa fa-search"></i><i class="fa fa-search"></i></span>
                      </div>
                      <div class="col-md-2">
                          <span>Live with <br><i class="fa fa-user"></i>
                          <i class="fa fa-user"></i>
                          </span>
                      </div>  
                      
                      <div class="col-md-2">
                        <span>n roommates  <br>
                            <select>
                              <option value="volvo">Volvo</option>
                              <option value="saab">Saab</option>
                              <option value="mercedes">Mercedes</option>
                              <option value="audi">Audi</option>
                            </select> 
                        </span>
                      </div> 

                      <div class="col-md-2">
                            <span>They should <form action="">
                                <input type="radio" name="occupation" value="study"> Study
                                <input type="radio" name="occupation" value="work"> Work
                                </form>
                            </span>
                      </div> 

                      <div class="col-md-1">
                          <span>Pet-Friendly <i class="fa fa-search"></i><i class="fa fa-search"></i></span>
                      </div> 

                      <div class="col-md-1">
                         <span>New Search <i class="fa fa-search"></i></span>
                      </div> 
              

                <div class="col-md-6">
                    
                </div>                
            </div>

            <div class="mainView col-md-12">
                <div class="searchMap col-md-8 col-xs-12">
                <!-- <iframe style="border: 1px solid rgb(142, 137, 131);" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d366.31072781234434!2d90.41294069744393!3d23.813511352687115!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1444811049438" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe> -->
                </div>
                 <!-- START PROPERTY LIST -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="offer">
                        <div class="user-avatar">
                            <img class="avatar-text" src="img/user.jpg">                            
                        </div>

                        <div class="shape">
                            <div class="shape-text">
                                <i class="fa fa-heart fa-2x"></i>                            
                            </div>
                        </div>

                         <div class="user-icon">
                            <div class="user-icon-text">
                                <span> 1 <i class="fa fa-user fa-2x"></i></span> 
                                <span>1 <i class="fa fa-user fa-2x"></i></span>                          
                            </div>
                        </div>

                         <div class="rent-icon">
                            <div class="rent-text">
                                <span><i class="fa fa-usd "></i>1000</span>                                                       
                            </div>
                        </div>

                        <div class="place-icon">
                            <div class="place-text">
                                <span><i class="fa fa-map-marker "></i> Washington DC</span> 
                                                       
                            </div>
                        </div>
                    </div>
                    <!-- property -->
                    <div class="offer">
                        <div class="user-avatar">
                            <img class="avatar-text" src="img/user.jpg">                            
                        </div>

                        <div class="shape">
                            <div class="shape-text">
                                <i class="fa fa-heart fa-2x"></i>                            
                            </div>
                        </div>

                         <div class="user-icon">
                            <div class="user-icon-text">
                                <span>1 <i class="fa fa-user fa-2x"></i></span> 
                                <span>1 <i class="fa fa-user fa-2x"></i></span>                          
                            </div>
                        </div>

                         <div class="rent-icon">
                            <div class="rent-text">
                                <span><i class="fa fa-usd "></i>1000</span> 
                                                       
                            </div>
                        </div>

                        <div class="place-icon">
                            <div class="place-text">
                                <span><i class="fa fa-map-marker "></i> Washington DC</span> 
                                                       
                            </div>
                        </div>
                    </div>
 <!-- property -->
                    <div class="offer">
                        <div class="user-avatar">
                            <img class="avatar-text" src="img/user.jpg">                            
                        </div>

                        <div class="shape">
                            <div class="shape-text">
                                <i class="fa fa-heart fa-2x"></i>                            
                            </div>
                        </div>

                         <div class="user-icon">
                            <div class="user-icon-text">
                                <span>1 <i class="fa fa-user fa-2x"></i></span> 
                                <span>1 <i class="fa fa-user fa-2x"></i></span>                          
                            </div>
                        </div>

                         <div class="rent-icon">
                            <div class="rent-text">
                                <span><i class="fa fa-usd "></i>1000</span>                                                        
                            </div>
                        </div>

                        <div class="place-icon">
                            <div class="place-text">
                                <span><i class="fa fa-map-marker "></i> Washington DC</span>                                                        
                            </div>
                        </div>
                    </div>
                    <!-- property -->

                </div>

                <!-- END PROPERTY LIST -->
            </div>

        </div>


        </div>
    </div>



    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


</body>
</html>
