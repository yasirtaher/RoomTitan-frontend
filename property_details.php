<?php include('header.php') ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="searchcriteria col-md-12" style="height:100px">
                
                      <div class="col-md-4 col-sm-6 col-xs-12 leftspan">
                   
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

                      <div class="col-md-1 col-sm-6 col-xs-12 rightspan" style="background-color:#fff;height:10px">
                          <span>Furnished <br>
                            <form action="">
                              <input type="radio" name="furnished" value="1"> yes<br>
                              <input type="radio" name="furnished" value="2"> no
                            </form>
                          </span>

                      </div>
                      
                      <div class="col-md-2 col-sm-6 col-xs-12 rightspan">
                            <span>Occupation<br>
                              <select class="dropdowncust form-control">
                                <option value="1">Study</option>
                                <option value="2">Work</option>
                              </select>
                            </span>
                      </div> 

                      <div class="col-md-2 col-sm-6 col-xs-12 rightspan">
                          <span>Pet-Friendly <br>
                            <form action="">
                              <input type="radio" name="furnished" value="1"> yes
                              <input type="radio" name="furnished" value="2"> no
                            </form>
                          </span>
                      </div> 

                      <div class="col-md-1 col-sm-6 col-xs-12 rightspan">
                         <span>List view <br><i class="fa fa-list fa-2x"></i></span>
                      </div> 
                         
            </div>

            <div class="mainView col-md-12">
                <div class="searchMap col-md-5 col-xs-12">
                    <iframe style="border: 1px solid rgb(142, 137, 131);" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d366.31072781234434!2d90.41294069744393!3d23.813511352687115!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1444811049438" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                 <!-- PROPERTY SLIDER -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="property-image-slider">
                        <img src="img/property1.jpg">
                    </div>
                    <div class="user-avatar ">
                        <img class="avatar-text" src="img/user.jpg"> 
                                                   
                    </div>
                    
                    <div class="agent-chat">

                        <button class="btn btn-chat fa fa-comment-o" type="submit"> Chat with me</button>                       
                        <p class="pull-right"> Gay friendly</p> 

                    </div>
                                
                </div>
                <!-- END PROPERTY SLIDER -->

                <div class="property-info col-md-3">
                <table class="feature-info">
                    <tr>
                        <td class="features">Available</td>
                        <td>Nov 1st</td>
                    </tr>
                    <tr>
                        <td class="features">Minimum duration</td>
                        <td>3 months</td>        
                    </tr>
                    <tr>
                        <td class="features">Rent</td>
                        <td>$1500</td>
                    </tr>
                    <tr>
                        <td class="features">Utilities indluded</td>
                        <td>1 1 1</td>
                    </tr>
                    <tr>
                        <td class="features">Deposit</td>    
                        <td>$1000</td> 
                    </tr>
                    <tr>
                        <td class="features"> Existing roommates</td>     
                        <td> <span> 1 <i class="fa fa-user"></i></span> 
                                <span>1 <i class="fa fa-user"></i></span>  
                        </td>
                    </tr>
                    <tr>
                        <td class="features">Languages</td>
                        <td><span><i class="fa fa-flag"></i></span> 
                                <span><i class="fa fa-flag"></i></span> </td>
                    </tr>
                    <tr>
                        <td class="features">Furnished</td>  
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td class="features">Pet Friendly</td>
                        <td>No</td>
                  </tr>
                </table>
                    
                </div>
                <div class="property-details col-md-7">
                    
                    <h3>Description</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    
                    <h3>Rules</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    
                </div>

            </div>
            <!-- END MAINVIEW -->

        </div>


        </div>
    </div>



    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


</body>
</html>
