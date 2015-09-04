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
          <a class="navbar-brand" href="/views/index/">Home</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      
          
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/views/how_it_works/">How It Works</a></li>
            <li><a href="/views/chef">Chef</a></li>
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
            
            <?php }else{?>
            <li class="dropdown">
            <a class="dropdown-toggle" href="#" data-toggle="modal" data-target="#myModal">Sign In <strong class="caret"></strong></a>
            <?php }?>
            </ul>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="panel panel-login">
                <div class="panel-heading">        
                  <!-- <div class="form-group"> -->

                  <!-- Modal Header -->
                  <div class="modal-header">
                    <div class="row">
                      <div class="text-center">
                        <h4>Sign up or login for EatMe!</h4>          
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
                            <option value='' selected disabled>Do You want to Cook or Eat?</option>
                            <option value='2'>Cook</option>
                            <option value='3'>Eat</option>
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
                            <input type="submit" name="register" tabindex="6" id="register" class="form-control btn btn-login" value="Register an Account">
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