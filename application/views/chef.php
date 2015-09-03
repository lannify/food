<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chef page</title>
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

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Browse Meals<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">By Categories</a></li>
                <li><a href="#">By Locations</a></li>
              </ul>
            </li>
            <li><a href="#">Your Cart <span class= "glyphicon glyphicon-shopping-cart"></span></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Your Account<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Profile</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Sign Out</a></li>
              </ul>
            </li>
          </ul>

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="profile">
      <div class ="container">
        <div class="row">
              <div class="col-md-4">
                <div class="profile_photo">
                  <h3><?= $chef['name'] ?></h3>

                  <img class = "user_photo" src = "<?= $chef['profile_photo'] ?>" alt="chef photo">
                </div>
              </div>
              <div class="col-md-8">
                <div class="description">                 
                  <h3><?= $chef['name'] ?>'s Intro</h3>
                  <p><?= $chef['description'] ?></p>
                </div>
              </div>
          </div>
      </div>
    </div> <!-- End Profile header -->

    <div class="main-content text-center">
      <div class ="container">
          <div class="row">


<?
    foreach($future_meals as $meal)
    {
?>
      <div class="col-md-4">
        <div class="view">  
           <img class="photo" src="/assets/images/japanese1.jpeg">
           <div class="mask">  
           <h2><?= $meal['name'] ?></h2>  
           <p><?= $meal['description']?></p>  
               <a href="#" class="info"><?= date('M d, Y',strtotime($meal['meal_date']))?></a>  
           </div>  
        </div> 
      </div>
<?      
    }


?>
             
<!-- If there are past meals   -->   
<?
    if(count($past_meal)>0)
    {
?>
              <div class="col-md-4">
                <div class="view">  
                   <img class="photo" src="/assets/images/ramen.jpeg">
                   <div class="mask">  
                   <h2><?= $past_meal['name'] ?></h2>  
                   <p><?= $past_meal['description']?></p>  
                       <a href="#" class="info"><?= date('M d, Y',strtotime($past_meal['meal_date']))?></a>  
                   </div>  
                </div> 
              </div>
<?      
    }
?>                                    
          </div> 
          <div class="row">
            <div class="col-md-12 profile">
              Meal Locations on Map go here   
            </div>      
          </div> 
          <div class="row">
            <div class="col-md-4">
              <h2>Review 1</h2>          
            </div>
            <div class="col-md-4">
              <h2>Review 1</h2>          
            </div>
            <div class="col-md-4">
              <h2>Review 1</h2>          
            </div>
          </div>       
      </div>
    </div>
  
    <hr>
    <hr>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/main.js"></script>
  </body>
</html>