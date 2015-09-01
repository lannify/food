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
            <li><a href="/views/chef">Chef</a></li>
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