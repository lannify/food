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
                    var meals = [ 
                      {lat: 37.39743104, lng: -121.87556104},
                      {lat: 37.36390203, lng: -121.88115955},
                      {lat: 37.37782271, lng: -122.04279275},
                      {lat: 37.37771035, lng: -121.9742573},
                      {lat: 37.39404657, lng: -122.15193414},
                      {lat: 37.35486242, lng: -122.07595702},
                      {lat: 37.34940552, lng: -121.91797286},
                      {lat: 37.34474129, lng: -122.03790726},
                      {lat: 37.36321968, lng: -122.0706813},
                      {lat: 37.36196557, lng: -122.00061163},
                      {lat: 37.40863935, lng: -121.94225088},
                      {lat: 37.36272309, lng: -121.83479607},
                      {lat: 37.38687459, lng: -121.84449977},
                      {lat: 37.36825642, lng: -121.95936857},
                      {lat: 37.36935719, lng: -121.89182141},
                      {lat: 37.416025, lng: -121.99236035},
                      {lat: 37.39062679, lng: -121.95098261},
                      {lat: 37.37906933, lng: -122.02500304},
                      {lat: 37.38714426, lng: -122.15468184},
                      {lat: 37.36677049, lng: -121.95586044},
                      {lat: 37.40131304, lng: -122.14730128},
                      {lat: 37.39566819, lng: -122.08497696},
                      {lat: 37.40903176, lng: -121.9372057},
                      {lat: 37.42585529, lng: -122.16190381},
                      {lat: 37.37398998, lng: -122.0759011},
                      {lat: 37.35690229, lng: -121.98618559},
                      {lat: 37.38212721, lng: -122.06855392},
                      {lat: 37.41387243, lng: -121.9054027},
                      {lat: 37.3635334, lng: -121.93354837},
                      {lat: 37.35874097, lng: -122.0918501},
                      {lat: 37.41741816, lng: -121.98111524},
                      {lat: 37.40864992, lng: -121.87010966},
                      {lat: 37.34568776, lng: -121.83878625},
                      {lat: 37.36166424, lng: -121.87928799},
                      {lat: 37.42128711, lng: -121.91590933},
                      {lat: 37.36214398, lng: -122.06076052},
                      {lat: 37.39587831, lng: -121.87214132},
                      {lat: 37.39991534, lng: -122.1325021},
                      {lat: 37.37727163, lng: -121.99534691},
                      {lat: 37.37628079, lng: -121.92886354},
                      {lat: 37.37987572, lng: -122.0697582},
                      {lat: 37.37259871, lng: -122.02539975},
                      {lat: 37.34630312, lng: -122.07926063},
                      {lat: 37.42361169, lng: -121.91028861},
                      {lat: 37.37159866, lng: -121.92811538},
                      {lat: 37.41621746, lng: -122.00491305},
                      {lat: 37.39816993, lng: -122.08789542},
                      {lat: 37.39340284, lng: -122.00291551},
                      {lat: 37.42558175, lng: -122.10499265},
                      {lat: 37.3421362, lng: -122.14178586},
                      {lat: 37.40714883, lng: -121.92563109},
                      {lat: 37.4095535, lng: -122.11885293},
                      {lat: 37.34692315, lng: -121.93699661},
                      {lat: 37.34746253, lng: -122.16176626},
                      {lat: 37.41228359, lng: -122.08619213},
                      {lat: 37.34954084, lng: -122.04971611},
                      {lat: 37.40965395, lng: -122.00043159},
                      {lat: 37.39018354, lng: -121.8915693},
                      {lat: 37.4009653, lng: -122.04024157},
                      {lat: 37.41671035, lng: -121.94637468},
                      {lat: 37.369673, lng: -121.93704006},
                      {lat: 37.39831075, lng: -122.07333128},
                      {lat: 37.40476819, lng: -121.91093664},
                      {lat: 37.34813845, lng: -122.04312166},
                      {lat: 37.37953969, lng: -121.85361826},
                      {lat: 37.39530211, lng: -122.10640415},
                      {lat: 37.37786497, lng: -122.0785644},
                      {lat: 37.40598054, lng: -122.01766178},
                      {lat: 37.42587388, lng: -121.90101707},
                      {lat: 37.36473158, lng: -121.95492795},
                      {lat: 37.36852249, lng: -121.85722039},
                      {lat: 37.42569254, lng: -121.93701129},
                      {lat: 37.38398884, lng: -121.97486907},
                      {lat: 37.37117384, lng: -121.93356388},
                      {lat: 37.37570524, lng: -121.96220982},
                      {lat: 37.36588051, lng: -122.14536257},
                      {lat: 37.3939449, lng: -122.01923001},
                      {lat: 37.39821454, lng: -121.88277444},
                      {lat: 37.40752357, lng: -122.01771017},
                      {lat: 37.36235611, lng: -122.04921072},
                      {lat: 37.34820057, lng: -122.01284636},
                      {lat: 37.41721121, lng: -121.96554341},
                      {lat: 37.37505659, lng: -122.06501187},
                      {lat: 37.41456084, lng: -121.96708613},
                      {lat: 37.40537465, lng: -122.05480109},
                      {lat: 37.34490541, lng: -121.85467676},
                      {lat: 37.34329089, lng: -121.88079557},
                      {lat: 37.4175419, lng: -121.87784737},
                      {lat: 37.36285427, lng: -121.88796112},
                      {lat: 37.36003641, lng: -121.89129652},
                      {lat: 37.38043414, lng: -121.95976865},
                      {lat: 37.39533316, lng: -121.93528007},
                      {lat: 37.35985875, lng: -122.13392088},
                      {lat: 37.38690275, lng: -121.90932797},
                      {lat: 37.36124317, lng: -122.03584685},
                      {lat: 37.36539461, lng: -122.13018733},
                      {lat: 37.34463407, lng: -122.04133014},
                      {lat: 37.3884427, lng: -121.87972712},
                      {lat: 37.34906561, lng: -121.89070389},
                      {lat: 37.39346408, lng: -121.88034783}];

                    function initMap() {
                      var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 12,
                        center: {lat: 37.392306, lng: -121.971760}
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
                <h3><?=count($this->session->userdata('search_results'));?> Result(s) Found!</h3>
              </div>
<?php
            foreach($this->session->userdata('search_results') as $search_result)
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
?>
                      <p><a href=<?="/meals/meal/".$search_result['meal_id']?> class="btn btn-primary" role="button">Book this meal!</a></p>
                    </div>
                  </div>
              </div>              
<?php
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