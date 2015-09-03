<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Results</title>
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/css/main.css" rel="stylesheet">
    <link href="/assets/css/dashboard.css" rel="stylesheet">
    <link href="/assets/css/chosen/chosen.css" rel="stylesheet">
    <link href="/assets/css/ihover.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
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

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <li class="active"><a href="">Filter options<span class="sr-only">(current)</span></a></li>
                </ul>
                <ul class="nav nav-sidebar">
                    <li class="active"><a href="">Type of Cuisine</a></li>
                    <li><a href="">Thai</a></li>
                    <li><a href="">Fine Dining</a></li>
                    <li><a href="">Italian</a></li>
                    <li><a href="">Vegetarian</a></li>
                    <li><a href="">Indian</a></li>
                    <li role="separator" class="divider"></li>
                </ul>
                <ul class="nav nav-sidebar">
                    <li class="active"><a href="">Dietary Options</a></li>
                    <li><a href="">Low Carb</a></li>
                    <li><a href="">Vegetarian/Vegan</a></li>
                    <li><a href="">Gluten-Free</a></li>
                    <li><a href="">Allergies</a></li>
                    <li><a href="">Calorie Restrictions</a></li>
                    <li role="separator" class="divider"></li>
                </ul>
                <ul class="nav nav-sidebar">
                    <li class="active"><a href="">Other Criteria</a></li>
                    <li><a href="">Price</a></li>
                    <li><a href="">Distance</a></li>
                    <li><a href="">Rating/Reviews</a></li>
                    <li><a href="">Time</a></li>
                </ul>
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
                <div class="row">
                    <div id="map" style="height: 400px; text-align: center;vertical-align: middle;">Map Goes Here</div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                          <img src="/assets/images/meal-japanese.jpg" alt="1" style="position: relative; top: 0; left: 0;">
                          <img class="small-chef-picture" src="/assets/images/chef-results-2.jpeg" alt="chef1"/>
                          <div class="caption">
                            <h3>Ennui</h3>
                            <p>...</p>
                            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                          <img src="/assets/images/meal-viet.jpg" alt="1" style="position: relative; top: 0; left: 0;">
                          <img class="small-chef-picture" src="/assets/images/chef-results-3.jpeg" alt="chef1"/>
                          <div class="caption">
                            <h3>Homemade Vietnamese</h3>
                            <p>...</p>
                            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                          <img src="/assets/images/meal-steak-home.jpg" alt="1" style="position: relative; top: 0; left: 0;">
                          <img class="small-chef-picture" src="/assets/images/chef-results-4.jpg" alt="chef1"/>
                          <div class="caption">
                            <h3>Steak and Potatoes</h3>
                            <p>...</p>
                            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                          </div>
                        </div>
                    </div>
                </div><!-- row -->
            </div><!-- main content -->
        </div><!-- row -->
    </div><!-- /.container-fluid -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/chosen.jquery.js" type="text/javascript"></script>
  </body>
</html>