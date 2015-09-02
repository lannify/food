<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Meal page</title>
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/main.css" rel="stylesheet">
    <link href="/assets/css/bootstrap-chosen.css" rel="stylesheet">
    <link href="/assets/css/chosen/chosen.css" rel="stylesheet">
    <link href="/assets/css/ihover.css" rel="stylesheet">
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
          
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">How It Works</a></li>     
            <li><a href="#">Your Cart <span class= "glyphicon glyphicon-shopping-cart"></span></a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Your Account<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Dashboard</a></li>
                  <li><a href="#">Profile</a></li>
                  <li><a href="#">Orders</a></li>              
                  <li role="separator" class="divider"></li>
                  <li><a href="/users/logoff">Sign Out</a></li>              
                </ul>
              </li>
          </ul>

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="profile">
      <div class ="container">
        <div class="row">
              <div class="col-md-6">
                <div class="meal_photo">
                  <h3><?= $meal['name']?></h3>
                  <img class = "user_photo" src = "/assets/images/ramen.jpeg" alt="meal photo">
                </div>
              </div>
              <div class="col-md-6">
                <!-- <div class="description">                 
                  <h3>Description:</h3>
 
                  <p><?= $meal['description']?></p>
                  <p>Ingredients:</p>
                  <p>Servings: <?= $meal['quantity']?></p>
                  <p>Location: <?= $meal['location']?></p>
                  <p>Price per Person: $<?= $meal['price']?></p>
                  <p>Date: <?= date('M d y h:i A',strtotime($meal['date_of_meal']))?></p>
                </div>
                
                <button class="btn btn-default">Buy this meal</button> -->
                <div class="col-md-1">
              
               
                  <img class = "meal_thumbnail" src = "/assets/images/ramen.jpeg" alt="meal photo">
          
              </div>
              </div>
          </div>

      </div>
    </div> <!-- End Profile header -->

<!-- Get Meals Info/Photo and output them in each div.col-md-4 below -->
  
    <div class="main-content text-center">
      <div class ="container">
          <div class="row">
              
          </div>        
      </div>
    </div>
    
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYVbHcKksus8bLiG3R8ZKoxd1oqpBRaTg&sesnsor=false"
  type="text/javascript"></script>
  


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/main.js"></script>
    <script type="text/javascript">


</script>
  </body>
</html>