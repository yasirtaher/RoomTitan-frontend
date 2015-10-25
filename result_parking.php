<?php include('header.php') ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="searchcriteria col-md-12" style="height:100px">
                
                       <div class="col-md-3 col-sm-6 col-xs-12 leftspan">
                          <div class="fleft">
                               <input type="text" class="filterbox form-control" placeholder="Zip Code">
                          </div>
                          <div class="fleft">
                              <select class="dropdowncust form-control">
                                  <option value="">Listing Type</option>
                                  <option value="">Room</option>
                                  <option value="">Parking</option>
                              </select>
                          </div> 
                      </div>

                      <div class="col-md-2 col-sm-6 col-xs-12 leftspan">
                          <span>Budget <br><br></span>
                              <input id="Slider2" type="slider" name="price" value="5000;50000" />                        
                              <script type="text/javascript" charset="utf-8">
                                jQuery("#Slider2").slider({ from: 5000, to: 150000, heterogeneity: ['50/50000'], step: 1000, dimension: '&nbsp;$' });
                              </script>
                      </div>

                       <div class="col-md-2 col-sm-6 col-xs-12 ">
                            <span>Parking type<form action="">
                                <input type="radio" name="type" value="lot"> lot
                                <input type="radio" name="type" value="garage"> garage
                                </form>
                            </span>
                      </div> 
                      <div class="col-md-2 col-sm-6 col-xs-12 rightspan">
                        <span>Car size  <br>
                            <select class="dropdowncust form-control">
                              <option value="volvo">Volvo</option>
                              <option value="saab">Saab</option>
                              <option value="mercedes">Mercedes</option>
                              <option value="audi">Audi</option>
                            </select> 
                        </span>
                      </div> 

                      <div class="col-md-2 col-sm-6 col-xs-12 rightspan">
                          <span>Disable-Friendly <br><i class="fa fa fa-wheelchair fa-2x"></i><i class="fa fa-check fa-2x"></i></span>
                      </div> 

                      <div class="col-md-1 col-sm-6 col-xs-12 rightspan">
                         <span>List view <br><i class="fa fa-list fa-2x"></i></span>
                      </div> 
              

                <div class="col-md-6">
                    
                </div>                
            </div>

            <div class="mainView col-md-12">
                <div class="searchMap col-md-8 col-xs-12">
                <iframe style="border: 1px solid rgb(142, 137, 131);" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d366.31072781234434!2d90.41294069744393!3d23.813511352687115!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1444811049438" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
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

                         <div class="prent-icon">
                            <div class="prent-text">
                                <span><i class="fa fa-usd "></i>1000</span>                                                       
                            </div>
                        </div>

                        <div class="pplace-icon">
                            <div class="pplace-text">
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


                         <div class="prent-icon">
                            <div class="prent-text">
                                <span><i class="fa fa-usd "></i>1000</span> 
                                                       
                            </div>
                        </div>

                        <div class="pplace-icon">
                            <div class="pplace-text">
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

                         <div class="prent-icon ">
                            <div class="prent-text">
                                <span><i class="fa fa-usd "></i>1000</span>                                                        
                            </div>
                        </div>

                        <div class="pplace-icon">
                            <div class="pplace-text">
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
