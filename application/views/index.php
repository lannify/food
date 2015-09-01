<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home page</title>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/main.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Home</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      
          <form class="navbar-form navbar-right" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
<!--             <button type="submit" class="btn btn-default">Search</button> -->
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">How It Works</a></li>
            <li><a href="#">Chefs</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Foods<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Italian</a></li>
                <li><a href="#">Japanese</a></li>
                <li><a href="#">Korean</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Vegan</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Locations<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">San Jose</a></li>
                <li><a href="#">San Francisco</a></li>
                <li><a href="#">New York</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Paris</a></li>
              </ul>
            </li>
            <li><a href="#">Your Cart <span class= "glyphicon glyphicon-shopping-cart"></span></a></li>
            <li class="dropdown">

            <!-- Modal for Login & Register-->

            <a class="dropdown-toggle" href="#" data-toggle="modal" data-target="#myModal">Sign In <strong class="caret"></strong></a>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" 
                aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                     <!-- Modal Header -->
                 <div class="modal-header">
                    <button type="button" class="close" 
                            data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Login
                </h4>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
            <!-- Login Form -->
<?php 

            if($this->session->flashdata("login_error")){
                echo $this->session->flashdata("login_error");
            } 
?>
              <form class="form-horizontal" role="form" action="/users/user_login" method="post">
                    <input type="text" name="email" class="form-control" id="email" placeholder="Email"><br>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password"><br>
                    <input type="submit" class="btn btn-default" value='Sign In'>
              </form>
              <!-- Registeration Form -->
              <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">
                    Register
                </h4>
            </div><br>
<?php 
                    if($this->session->flashdata("error")) 
                    {
                        echo $this->session->flashdata("error")."<br>";
                    }
?>
              <form class="form-horizontal" role="form" action="/users/register/" method="post">
                    <input type="text" name="name" class="form-control" placeholder="Enter Your Name"><br>
                    <input type="text" name="email" class="form-control" placeholder="Email"><br>
                    <input type="text" name="phone" class="form-control" placeholder="Phone Number"><br>
                    <select class="form-control" name="level">
                                    <option value='0' selected disabled>Do You want to Cook or Eat?</option>
                                    <option value='2'>Cook</option>
                                    <option value='3'>Eat</option>
                    </select><br>
                    <input type="password" name="password" class="form-control" placeholder="Password"><br>
                    <input type="password" name="passconf" class="form-control" placeholder="Confirm Password"><br>
                    <input type="submit" class="btn btn-default" value='Register'>
            </form>
            </div>
        </div>
        </div>
        </div>
        </div>
          </li>
          </ul>

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="container">
      <div>
        <h1>Home Page</h1>
      </div>
    </div>  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/main.js"></script>
  </body>
</html>