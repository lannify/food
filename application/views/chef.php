<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chefs page</title>
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
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="profile">
      <div class ="container">
        <div class="row">
              <div class="col-md-4">
                <div class="profile_photo">
                  <h3>Chef Photo</h3>
                  </a>
                </div>
              </div>
              <div class="col-md-8">
                <div class="description">                 
                  <h3>Description</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
              </div>
          </div>
      </div>
    </div>
    <div class="main-content text-center">
      <div class ="container">
          <div class="row">
              <div class="col-md-4">
                <div class="meal">
                  <a href="#" data-toggle="modal">
                  <h3>Current Meals</h3>
                  </a>
                </div>
              </div>
              <div class="col-md-4">
                <div class="meal">
                  <a href="#" data-toggle="modal">
                  <h3>Upcoming Meals</h3>
                  </a>
                </div>
              </div>
              <div class="col-md-4">
               <div class="meal">
                  <a href="#" data-toggle="modal">
                  <h3>Past Meals</h3>
                  </a>
                </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-4">
                <div class="meal">
                  <a href="#" data-toggle="modal">
                  <h3>My Kitchen</h3>
                  </a>
                </div>
              </div>
              <div class="col-md-4">
                <div class="meal">
                  <a href="#" data-toggle="modal">
                  <h3>My Story</h3>
                  </a>
                </div>
              </div>
              <div class="col-md-4">
               <div class="meal">
                  <a href="#" data-toggle="modal">
                  <h3>Location</h3>
                  </a>
                </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-4">
                <div class="meal">
                  <a href="#" data-toggle="modal">
                  <h3>Reviews</h3>
                  </a>
                </div>
              </div>
              <div class="col-md-4">
                <div class="meal">
                  <a href="#" data-toggle="modal">
                 <h3>Requests</h3>
                  </a>
                </div>
              </div>
              <div class="col-md-4">
               <div class="meal">
                  <a href="#" data-toggle="modal">
                  <h3>Contact Me</h3>
                  </a>
                </div>
              </div>
          </div>
      </div>
    </div>
    <div class="container footer">
      <div class="row">
        <div class="col-md-4">
          <p>Link</p>
        </div>
        <div class="col-md-4">
          <p>Link</p>
        </div>
        <div class="col-md-4">
          <p>Link</p>
        </div>
      </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/main.js"></script>
  </body>
</html>