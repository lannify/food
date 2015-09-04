<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home page</title>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/main.css" rel="stylesheet">
    <link href="/assets/css/bootstrap-chosen.css" rel="stylesheet">
    <link href="/assets/css/chosen/chosen.css" rel="stylesheet">
    <link href="/assets/css/ihover.css" rel="stylesheet">
  </head>
  <body>
    <div class="row">
<?php 
      if($this->session->flashdata("login_errors"))
      {
      echo "<div class='alert alert-warning' role='alert'>".$this->session->flashdata("login_errors")."</div>";
      }
      if($this->session->flashdata("reg_errors")) 
      {
      echo "<div class='alert alert-warning' role='alert'>".$this->session->flashdata('reg_errors')."</div>";
      }
?>
    </div>    
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Home</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      
          
          <ul class="nav navbar-nav navbar-right">
        <!--     <li><a href="/views/how_it_works/">How It Works</a></li> -->
            <li><a href="/views/results">Browse</a></li>
            <?php
                if($this->session->userdata('logged_in') === TRUE){
             ?>
            <li><a href="/views/cart/">Your Cart <span class= "glyphicon glyphicon-shopping-cart"></span></a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Your Account<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="/views/dashboard/">Dashboard</a></li>             
                  <li role="separator" class="divider"></li>
                  <li><a href="/users/logout">Sign Out</a></li>              
                </ul>
              </li>
      
            <!-- Modal for Login & Register-->
            
            <?php 
              } else {
            ?>
            <li class="dropdown">
            <a class="dropdown-toggle" href="#" data-toggle="modal" data-target="#myModal">Sign In <strong class="caret"></strong></a>
            <?php 
              }
            ?>
            </ul>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="panel panel-login">
                <div class="panel-heading">        
                  <!-- <div class="form-group"> -->

                  <!-- Modal Header -->
                  <div class="modal-header">
                    <div class="row">
                      <div class="text-center">
                        <h4>Sign up or login for FeedMe!</h4>          
                      </div>
                      <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                      </button>
                    </div>
                    <div class="row">
                      <div class="col-xs-6">
                        <a href="#" class="active" id="login-form-link">Login</a>
                      </div>
                      <div class="col-xs-6">
                        <a href="#" id="request-form-link">Register for an Account</a>
                      </div>
                    </div>
                  </div>
                <!-- </div> -->

                <!-- Modal Body -->
                <div class="modal-body">
                  <div class="panel-body">
                    <div class="row">
<?php 
                    if($this->session->flashdata("login_errors"))
                    {
                      echo "<div class='alert alert-warning' role='alert'>".$this->session->flashdata("login_errors")."</div>";
                    }
                    if($this->session->flashdata("reg_errors")) 
                    {
                      echo "<div class='alert alert-warning' role='alert'>".$this->session->flashdata('reg_errors')."</div>";
                    }
?>                
                    <form id="login-form" action="/users/login" method="post" role="form" style="display: block;">
                      <div class="form-group">
                        <input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="">
                      </div>
                      <div class="form-group">
                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-sm-6 col-sm-offset-3">
                            <input type="submit" name="login-submit" id="login-submit" tabindex="3" class="form-control btn btn-login" value="Log In">
                          </div>
                        </div>
                      </div>
                    </form> <!-- /.login(form) -->

                    <form id="request-form" action="/users/register" method="post" role="form" style="display: none;">
                      <div class="form-group">
                        <select class="form-control" name="level">
                            <option value='' selected disabled>Are you a chef or diner?</option>
                            <option value='2'>I'm going to cook!</option>
                            <option value='3'>I'm just here to eat.</option>
                          </select>
                      </div>                      
                      <div class="form-group">
                        <input type="text" name="name" id="name" tabindex="1" class="form-control" placeholder="Name" value="">
                      </div>
                      <div class="form-group">
                        <input type="text" name="email" id="email" tabindex="2" class="form-control" placeholder="Email" value="">
                      </div>
                      <div class="form-group">
                        <input type="text" name="phone" tabindex="3" class="form-control" placeholder="Phone" value="">
                      </div>
                      <div class="form-group">
                        <input type="password" name="password" tabindex="4" class="form-control" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <input type="password" name="passconf" tabindex="5" class="form-control" placeholder="Confirm Password">
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-sm-6 col-sm-offset-3">
                            <input type="submit" name="register" tabindex="6" id="register" class="form-control btn btn-login" value="Register">
                          </div>
                        </div>
                      </div>                 
                    </form> <!-- /.request (form) -->
                  </div> <!-- /.row (form) -->
                </div> <!-- /.panel-body -->
              </div> <!-- /.modal-body -->
            </div> <!-- /.panel-heading -->
          </div> <!-- /.panel-login -->
        </div> <!-- /.modal-fade -->
        </li>
        </ul>

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="background-top col-md-12 col-lg-12 col-sm-12">
          <p>Dine. Together.</p>
        </div>
      </div>

      <div class="row">
        <div class="page-header">
          <h3>Made for you</h3>
          <h4>Discover gourmet meals at home-cooked prices</h4>
        </div>
        <div class="meals-mid col-md-2 col-lg-2 col-sm-2">
        </div>
        <div class="meals-mid col-md-9 col-lg-9 col-sm-9">
          <div class="col-xs-3 col-md-3 col-lg-3 ih-item square colored effect6 from_top_and_bottom">
            <a href="/landings/search_category/70">
              <div class="img"><img src="/assets/images/meal-korean.jpg" alt="umsik"></div>
              <div class="info">
                <h3>Korean</h3>
                <p>Click to discover Korean food near you</p>
            </div></a>
          </div>
          <div class="col-xs-3 col-md-3 col-lg-3 ih-item square colored effect6 from_top_and_bottom">
            <a href="/landings/search_category/68">
              <div class="img"><img src="/assets/images/meal-italian.jpg" alt="italian"></div>
              <div class="info">
                <h3>Italian</h3>
                <p>Click to discover Italian food near you</p>
              </div>
            </a>
          </div>
          <div class="col-xs-3 col-md-3 col-lg-3 ih-item square colored effect6 from_top_and_bottom">
            <a href="/landings/search_category/110">
              <div class="img"><img src="/assets/images/meal-steak.jpg" alt="steak"></div>
              <div class="info">
                <h3>Steakhouses</h3>
                <p>Click to discover fine dining near you</p>
              </div>
            </a>
          </div>
          <div class="col-xs-3 col-md-3 col-lg-3 ih-item square colored effect6 from_top_and_bottom">
            <a href="/landings/search_category/99">
              <div class="img"><img src="/assets/images/meal-sandwich.jpeg" alt="sandwich"></div>
              <div class="info">
                <h3>Seafood</h3>
                <p>Click to discover Seafood food near you</p>
              </div>
            </a>
          </div>
          <div class="col-xs-3 col-md-3 col-lg-3 ih-item square colored effect6 from_top_and_bottom">
            <a href="/landings/search_category/22">
              <div class="img"><img src="/assets/images/meal-dessert.jpg" alt="dessert"></div>
              <div class="info">
                <h3>Sweets</h3>
                <p>Click for delicious desserts</p>
              </div>
          </a>
          </div>
          <div class="col-xs-3 col-md-3 col-lg-3 ih-item square colored effect6 from_top_and_bottom">
            <a href="/landings/search_category/126">
              <div class="img"><img src="/assets/images/meal-vegetarian.jpg" alt="veggie"></div>
              <div class="info">
                <h3>Vegetarian</h3>
                <p>Click for vegetarian options</p>
              </div>
            </a>
          </div>

        </div>
        <div class="meals-mid col-md-1 col-lg-1 col-sm-1">
        </div>
      </div> <!-- end middle-row  -->



      <div class="row">
        <div class="page-header">
          <h3>Or search by type and/or date</h3>
        </div>
        <div class="background-bottom col-md-12 col-lg-12 col-sm-12">
          <div class="col-md-4 col-lg-4 col-sm-4"></div>
          <div class="background-bottom-form col-md-4 col-lg-4 col-sm-4">
            <form action="/landings/search" method="post">
              <div class="form-group">
                <label for="type" class="control-label">Cuisine:</label> 
                <select class="chosen-select form-control" data-placeholder="Search for foods" style="width:200px;" name="type" multiple>
                  <option value="0" default></option>
                  <optgroup label="Asian">
                    <option value="119">Thai</option>
                    <option value="70">Korean</option>
                    <option value="33">Chinese</option>
                    <option value="69">Japanese</option>
                    <option value="65">Indian</option>
                  </optgroup>
                  <optgroup label="Western">
                    <option value="3">American</option>
                    <option value="52">French</option>
                    <option value="68">Italian</option>
                    <option value="99">Seafood</option>
                    <option value="86">Pizza</option>
                  </optgroup>
                  <optgroup label="Other Types">
                    <option value="55">Gluten-free</option>
                    <option value="58">Halal</option>
                    <option value="125">Vegan</option>
                    <option value="126">Vegetarian</option>                    
                    <option value="71">Kosher</option>
                    <option value="35">Comfort Food</option>                    
                  </optgroup>
                </select>
              </div>
              <div class="form-group">
                <label for="type" class="control-label">From date:</label>
                <input type="date" name="from_date" tabindex="1" class="form-control" value="" style="width: 200px;">
              </div>
              <div class="form-group">
                <label for="type" class="control-label">To date:</label>
                <input type="date" name="to_date" tabindex="2" class="form-control" value="" style="width: 200px;">
              </div>
              <input class="btn btn-primary" type="submit" value="Find meals">
            </form>
          </div> <!-- /.background-bottom-form -->
          <div class="col-md-4 col-lg-4 col-sm-4"></div>
        </div> <!-- /.background-bottom -->
      </div> <!-- /.row -->
    </div> <!-- /.container-fluid -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/chosen.jquery.js" type="text/javascript"></script>
    <script type="text/javascript">
      var config = {
        '.chosen-select'           : {},
        '.chosen-select-deselect'  : {allow_single_deselect:true},
        '.chosen-select-no-single' : {disable_search_threshold:10},
        '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
        '.chosen-select-width'     : {width:"95%"}
      }
      for (var selector in config) {
        $(selector).chosen(config[selector]);
      }
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
      $('.mask').hover(
        function(){
          $(this).find(".thumbnail").addClass("lowerOpacity");
        }, function(){
          $(this).find(".thumbnail").removeClass("lowerOpacity");
      })
    });
    </script>
  </body>
</html>