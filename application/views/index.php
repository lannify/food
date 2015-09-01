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
            <a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
            <div class="dropdown-menu" style="padding: 15px; padding-bottom: 10px;">
                <!-- Login Form -->
<?php 

            if($this->session->flashdata("login_error")){
                echo $this->session->flashdata("login_error");
            } 
?>
              <form action="/users/user_login" method="post">
                  <label>Email:</label>
                  <input type="text" name="email"><br>
                  <label>Password:</label>
                  <input type="password" name="password"><br><br>
                  <input type="submit" name="login" value="Login"><br>
              </form>
              <br>
              <!-- Registeration Form -->
              Register New Account
<?php 
                    if($this->session->flashdata("error")) 
                    {
                        echo $this->session->flashdata("error")."<br>";
                    }
?>
              <form action="/users/register/" method="post">
                    <label>Name:</label>
                    <input type="text" name="name" value=""><br>
                    <label>Email:</label>
                    <input type="text" name="email" value=""><br>
                    <label>Phone:</label>
                    <input type="text" name="phone" value="">
                    <br><label>Cook or Eat?</label><br>
                        <input type="radio" name="level" value="2"> Cook<br>
                        <input type="radio" name="level" value="3"> Eat
                    <br><label>Password</label>
                    <input type="password" name="password" value=""><br>
                    <label>Confirm Password</label>
                    <input type="password" name="passconf" value=""><br><br>
                    <input type="submit" name="register" value="Register">
            </form>
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