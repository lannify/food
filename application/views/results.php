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
          <a class="navbar-brand" href="/views/index/">Home</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      
          <form class="navbar-form navbar-right" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
<!--             <button type="submit" class="btn btn-default">Search</button> -->
          </form>
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Your Account<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="/views/dashboard/">Dashboard</a></li>             
                  <li role="separator" class="divider"></li>
                  <li><a href="/users/logoff">Sign Out</a></li>              
                </ul>
                <li><a href="/views/cart/">Your Cart <span class= "glyphicon glyphicon-shopping-cart"></span></a></li>
              </li>
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
                    <li><div class="checkbox">
                      <label>
                        <input type="checkbox" value=""><a href="/landings/search_category/119">Thai</a>
                      </label>
                    </div></li>
                    <li><div class="checkbox">
                      <label>
                        <input type="checkbox" value=""><a href="/landings/search_category/91">Ramen</a>
                      </label>
                    </div></li>
                    <li><div class="checkbox">
                      <label>
                        <input type="checkbox" value=""><a href="/landings/search_category/68">Italian</a>
                      </label>
                    </div></li>
                    <li><div class="checkbox">
                      <label>
                        <input type="checkbox" value=""><a href="/landings/search_category/126">Vegetarian</a>
                      </label>
                    </div></li>
                    <li><div class="checkbox">
                      <label>
                        <input type="checkbox" value=""><a href="/landings/search_category/65">Indian</a>
                      </label>
                    </div></li>
                    <li role="separator" class="divider"></li>
                </ul>
                <ul class="nav nav-sidebar">
                    <li class="active"><a href="">Dietary Options</a></li>
                    <li><div class="checkbox">
                      <label>
                        <input type="checkbox" value=""><a href="/views/results">Low Carb</a>
                      </label>
                    </div></li>
                    <li><div class="checkbox">
                      <label>
                        <input type="checkbox" value=""><a href="/views/results">Vegetarian/Vegan</a>
                      </label>
                    </div></li>
                    <li><div class="checkbox">
                      <label>
                        <input type="checkbox" value=""><a href="/views/results">Gluten-Free</a>
                      </label>
                    </div></li>
                    <li><div class="checkbox">
                      <label>
                        <input type="checkbox" value=""><a href="/views/results">Allergies</a>
                      </label>
                    </div></li>
                    <li><div class="checkbox">
                      <label>
                        <input type="checkbox" value=""><a href="/views/results">Caloric Restrictions</a>
                      </label>
                    </div></li>
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
                <div id="map" style="height: 400px; text-align: center;vertical-align: middle;"></div>
                <script>
                // $(document).ready(function(){
                //   var map = new GMap2(document.getElementById('map')); 
                //   var sanjose = new GLatLng(37.392306,-121.971760); 
                //   map.setCenter(sanjose, 12);

                //   $.get('/landings/results_locations_json', function(res) {
                //     var marker;
                //     var point;

                //     for(var i = 0; i < res.length; i++){
                //       point = new GLatLng(res[i]);
                //       marker = new GMarker(point);
                //       map.addOverlay(marker);
                //     }
                //   }, 'json');
                // });
                //
                console.log("loading map");
<?php
                echo "var meals = [";
                if($this->session->userdata('result_locations'))
                {
                  foreach($this->session->userdata('result_locations') as $location)
                  {
                    echo "{lat: ".$location['lat'].", lng: ".$location['lng']."}, ";
                  }
                }
                echo "];";
?>
                if(meals.length > 0)
                {
                  var centerSanJose = meals[0];  
                }
                else
                {
                  var centerSanJose = {lat: 37.392306, lng: -121.971760};
                }
                
                function initMap() {
                  var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 11,
                    center: centerSanJose
                  });
                  for(var i = 0; i < meals.length; i++)
                  {
                    marker = new google.maps.Marker({
                      map: map,
                      draggable: true,
                      animation: google.maps.Animation.DROP,
                      position: meals[i]
                    });
                    marker.addListener('click', toggleBounce);
                  }
                }
                function toggleBounce() {
                  if (marker.getAnimation() !== null) {
                    marker.setAnimation(null);
                  } else {
                    marker.setAnimation(google.maps.Animation.BOUNCE);
                  }
                }
                </script>
                <script async defer src="https://maps.googleapis.com/maps/api/js?signed_in=true&callback=initMap"></script>
              </div>
              <div class="row">
<?php
          // search_results[0] will be set to false if no meals were found from landings controller
          if($this->session->userdata('search_results')[0])
          {
?>
              <div class="page-header">
                <h3>
<?php
              $count = 0;
              foreach($this->session->userdata('search_results') as $category)
              {
                foreach($category as $search_result)
                {
                  $count++;
                }
              }
              echo $count;
              ?> Result(s) Found!</h3>
              </div>
<?php
            foreach($this->session->userdata('search_results') as $category)
            {
              foreach($category as $search_result)
              {
?>
              <div class="col-sm-6 col-md-4">
                  <div class="thumbnail">
                    <img src="/assets/images/meal-japanese.jpg" alt="1" style="position: relative; top: 0; left: 0;">
                    <img class="small-chef-picture" src="/assets/images/chef-results-2.jpeg" alt="chef1"/>
                    <div class="caption">
<?php
                    echo "<h3>".$search_result['name']."</h3>";
                    echo "<p>".$search_result['description']."</p>";
                    echo "<p>".$search_result['meal_date']."</p>";
?>
                      <p><a href=<?="/meals/meal/".$search_result['meal_id']?> class="btn btn-primary" role="button">Book this meal!</a></p>
                    </div>
                  </div>
              </div>              
<?php
              }
            }
          }
          else
          {
?>
                  <div class="row">
                    <h4>No search results found! Try removing some filters on the left.</h4>
                  </div>
<?php
          }
?>
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