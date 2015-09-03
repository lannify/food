<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Meal page</title>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">   
    <link href="/assets/css/bootstrap-chosen.css" rel="stylesheet">
    <link href="/assets/css/chosen/chosen.css" rel="stylesheet">
    <link href="/assets/css/ihover.css" rel="stylesheet">
    <link href="/assets/css/main.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/jquery-1.6.1.min.js"></script>
    <script src="/assets/js/photo-gallery.js"></script>
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


      <div class ="container">
        <div class="row">
          <div class="col-md-8">
            <div class="meal_profile">
             <!--  <h3><?= $meal['name']?></h3> -->
              <img class = "meal_photo" src = "/assets/images/japanese3.jpeg" alt="meal photo">
              <div class="row">
                <div class="col-md-3">
                  <img class = "meal_photo" src = "/assets/images/japanese3.jpeg" alt="meal photo" >
                </div>
                <div class="col-md-3">
                  <img class = "meal_photo" src = "/assets/images/japanese3.jpeg" alt="meal photo" >
                </div>
                <div class="col-md-3">
                  <img class = "meal_photo" src = "/assets/images/japanese3.jpeg" alt="meal photo" >
                </div>
              </div>

              <div class="description">                 
                <h3>Description:</h3>

               <!--  <p><?= $meal['description']?></p>
                <p>Ingredients:</p>
                <p>Servings: <?= $meal['quantity']?></p>
                <p>Location: <?= $meal['location']?></p>
                <p>Price per Person: $<?= $meal['price']?></p>
                <p>Date: <?= date('M d y h:i A',strtotime($meal['date_of_meal']))?></p> -->
              </div>
            
              <button class="btn btn-default">Buy this meal</button> 
            </div>
          </div>
        </div>
      </div>

       <div class ="container" display="inline-block">
        <div class="row">
          <div class="col-md-4">
            
          </div>
        </div>
      </div>
    

<!-- Get Meals Info/Photo and output them in each div.col-md-4 below -->
  
    <div class="main-content text-center">
      <div class ="container">
          <div class="row">
              <ul class="row">

                <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">

                  <img class="img-responsive" src="/assets/images/japanese3.jpeg">

                </li>

                <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">

                  <img class="img-responsive" src="/assets/images/japanese3.jpeg">

                </li>

              </ul>
<div class="modal fade" id="my<a href="http://www.jqueryscript.net/tags.php?/Modal/">Modal</a>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body"> </div>
    </div>
  </div>
</div>

          </div>        
      </div>
    </div>
    
     


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

   
    <script src="/assets/js/main.js"></script>

    
  </body>
</html>