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

                      <div class="col-md-2 col-sm-6 col-xs-12">
                          <span>Budget <br><br></span>
                          <input id="Slider2" type="slider" name="price" value="5000;50000" />                        
                              <script type="text/javascript" charset="utf-8">
                                jQuery("#Slider2").slider({ from: 5000, to: 150000, heterogeneity: ['50/50000'], step: 1000, dimension: '&nbsp;$' });
                              </script>
                         
                      </div>

                      <div class="col-md-1 col-sm-6 col-xs-12 rightspan">
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
            <!-- END SEARCH CRITERIA -->

            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="col-md-2 col-sm-1"></div>
            <div class="col-md-8 col-sm-10 col-xs-12">
            
           <div class="roommates">
                <div class="col-md-3 col-sm-3 col-xs-12 roommate_image"><img src="img/user.jpg"></div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <span><h2>Lee R. Parker </h2></span>
                    <span><h4><i class="fa fa-map-marker"> Washington, D.C</i></h4></span>
                    <span><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></span>
                    <span>Searching for</span>
                </div>
                <div class="roommate_rating col-md-3 col-sm-3 col-xs-12">
                <div class="ratingtext">
                    <span class="rat"><i class="fa fa-star fa-2x"></i> 4,2/5</span>
                    <h4>I have credit card</h4>
                      <button data-toggle="modal" data-target="#messageModal" class="btn btn-chat"><i class="fa fa-comment-o fa-2x"></i> sent me a message</button>
                </div>
                </div>
            </div>

             <div class="roommates">
                <div class="col-md-3 col-sm-3 col-xs-12 roommate_image"><img src="img/user.jpg"></div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <span><h2>Lee R. Parker </h2></span>
                    <span><h4><i class="fa fa-map-marker"> Washington, D.C</i></h4></span>
                    <span><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></span>
                    <span>Searching for</span>
                </div>
                <div class="roommate_rating col-md-3 col-sm-3 col-xs-12">
                <div class="ratingtext">
                    <span class="rat"><i class="fa fa-star fa-2x"></i> 4,2/5</span>
                    <h4>I have credit card</h4>
                      <button data-toggle="modal" data-target="#messageModal" class="btn btn-chat"><i class="fa fa-comment-o fa-2x"></i> sent me a message</button>
                </div>
                </div>
            </div>

            <div class="roommates">
                <div class="col-md-3 col-sm-3 col-xs-12 roommate_image"><img src="img/user.jpg"></div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <span><h2>Lee R. Parker </h2></span>
                    <span><h4><i class="fa fa-map-marker"> Washington, D.C</i></h4></span>
                    <span><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></span>
                    <span>Searching for</span>
                </div>
                <div class="roommate_rating col-md-3 col-sm-3 col-xs-12">
                <div class="ratingtext">
                    <span class="rat"><i class="fa fa-star fa-2x"></i> 4,2/5</span>
                    <h4>I have credit card</h4>
                      <button data-toggle="modal" data-target="#messageModal" class="btn btn-chat"><i class="fa fa-comment-o fa-2x"></i> sent me a message</button>
                </div>
                </div>
            </div>
<button data-toggle="modal" data-target="#confirmationModal" class="btn btn-chat"> another modal</button>
            </div>

             <div class="col-md-2 col-sm-1"></div>              
            </div>


<!-- line modal -->
      <div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <h3 class="modal-title" id="lineModalLabel"></h3>
          </div>
          
          <div class="modal-body">
            <!-- content goes here -->
            <form accept-charset="UTF-8" action="" method="POST">
            <h3>Sent a message to "Name"</h3>
              <textarea class="form-control" id="message" name="message" placeholder="Do you think i can be your roommate? What do you want to know about me?" rows="8" style="margin-bottom:10px;"></textarea>
                <button class="btn btn-chat-roommate pull-right" type="submit"> <i class="fa fa-comment-o fa-2x"></i> Message "NAME"</button>
                

            </form>

          </div>
    <div class="modal-footer">
      <div class="btn-group btn-group-justified" role="group" aria-label="group button">

      </div>
    </div>
  </div>
  </div>
</div>


<!-- line modal -->
      <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <h3 class="modal-title" id="lineModalLabel"></h3>
          </div>
          
          <div class="modal-body">
            <div class="confirmationMessage">
              <h3>Your Message has been sent!</h3><br>
              <p>We will notify you when Name replies your message</p><br>

              <a href="#" type="button" class="btn btn-chat-roommate">Show me more roommates</a>
            </div>
          </div>
    <div class="modal-footer">
      <div class="btn-group btn-group-justified" role="group" aria-label="group button">

      </div>
    </div>
  </div>
  </div>
</div>

