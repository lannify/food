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

    <div class="container-fluid">
      <div class="row">
        <div class="background-top col-md-12 col-lg-12 col-sm-12">
          <p>Eat. Together.</p>
        </div>
      </div>
      <div class="row">
        <div class="page-header">
          <h3>Made for you</h3>
          <h4>Discover gourmet meals at home-cooked prices</h4>
        </div>
        <div class="meals-mid col-md-1 col-lg-1 col-sm-1">
        </div>
        <div class="meals-mid col-md-10 col-lg-10 col-sm-10">
          <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
              <img src="/assets/images/meal-korean.jpg" alt="umsik">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
              <img src="/assets/images/meal-italian.jpg" alt="italian">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
              <img src="/assets/images/meal-sandwich.jpeg" alt="sandwich">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
              <img src="/assets/images/meal-dessert.jpg" alt="dessert">
            </a>        
          </div>
        
          <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
              <img src="/assets/images/meal-chicken.jpg" alt="chicken">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
              <img src="/assets/images/meal-burgers.jpg" alt="burgers">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
              <img src="/assets/images/meal-steak.jpg" alt="steak">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
              <img src="/assets/images/meal-vegetarian.jpg" alt="veggie">
            </a>        
          </div>
        </div>
        <div class="meals-mid col-md-1 col-lg-1 col-sm-1">
        </div>
      </div>
      <div class="row">
        <div class="page-header">
          <h3>Find a meal today</h3>
        </div>
        <div class="background-bottom col-md-12 col-lg-12 col-sm-12">
          <div class="col-md-3 col-lg-3 col-sm-3"></div>
          <div class="background-bottom-form col-md-6 col-lg-6 col-sm-6">
            <form action="" method="post">
              <div class="form-group">
                <label for="type" class="col-sm-4 control-label">Cuisine:</label>
                <div class="col-sm-5">  
                  <select class="chosen-select form-control" data-placeholder="Search for foods" style="width:350px;"  name="type" multiple>
                    <option value></option>
                    <optgroup label="Asian">
                      <option value="1">Thai</option>
                      <option value="2">Korean</option>
                      <option value="3">Chinese</option>
                      <option value="4">Japanese</option>
                    </optgroup>
                    <optgroup label="Western">
                      <option value="5">Burgers</option>
                      <option value="6">Italian</option>
                      <option value="7">Vegetarian</option>
                      <option value="8">French</option>
                    </optgroup>
                    <optgroup label="Fine Dining">
                      <option value="9">Seafood</option>
                      <option value="10">Lobster</option>
                      <option value="11">Steak</option>
                      <option value="12">Fish</option>
                    </optgroup>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="type" class="col-sm-4 control-label">Date:</label>
                <div class="col-sm-5">  
                  <input type="date" name="date_of_meal" tabindex="1" class="form-control" value="">
                </div>
              </div>   
              <input type="hidden" name="" value=''>    
              <input class="btn btn-default" type="submit" value="Find meals">
            </form>
          </div> <!-- /.background-bottom-form -->
          <div class="col-md-3 col-lg-3 col-sm-3"></div>
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
  </body>
</html>