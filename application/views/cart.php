<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Your Shopping Cart</title>
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
            <li><a href="/views/results">Browse</a></li>
            <li><a href="/views/chefs_all">Chefs</a></li>
            <?php
                if($this->session->userdata('logged_in') === TRUE){
             ?>
            <li><a href="/views/cart/">Your Cart <span class= "glyphicon glyphicon-shopping-cart"></span></a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Your Account<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="/views/dashboard/">Dashboard</a></li>             
                  <li role="separator" class="divider"></li>
                  <li><a href="/users/logout">Sign Out</a></li>              
                </ul>
              </li>
      
            <!-- Modal for Login & Register-->
            
            <?php }else{?>
            <li class="dropdown">
            <a class="dropdown-toggle" href="#" data-toggle="modal" data-target="#myModal">Sign In <strong class="caret"></strong></a>
            <?php }?>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

  <div class="container-fluid">
    <div class="page-header">
      <h3>Your Cart</h3>
    </div>

    <div class="row">
      <div class="col-sm-10 col-md-10 col-lg-10">
<?

    foreach($cart as $item)
    {
?>
        <div class="row">
          <div class="col-md-8 col-lg-8 col-sm-8">
            <div class="media">
              <div class="media-left">
                <a href="/views/meal/<?= $item['id']?>">
                  <img class="media-object" src="/assets/images/meal-burgers.jpg" alt="burgers" style="height: 80px; width: 100px;">
                </a>
              </div>
              <div class="media-body">
                <h4 class="media-heading"><?= $item['name'] ?></h4>
                <h5>Chef <?= $item['chef'] ?></h5>
                <p><?= $item['meal_description'] ?></p>
              </div>
            </div>
          </div>
          <div class="col-md-2 col-lg-2 col-sm-2">
            <h6>Date: <?= date('M d, Y h:i A', strtotime($item['meal_date'])) ?></h6>
            <h6>Price per person: $<?= $item['price'] ?></h6>
            <h6>Quantity: <?= $item['qty'] ?></h6>
          </div>
          <div class="col-md-2 col-lg-2 col-sm-2">
          <? $id = $item['rowid'];?>
            <a href="/items/edit"><button type="button" class="btn btn-primary btn-xs">Edit</button></a>
            <a href="/items/remove_from_cart/<?= $id?>"><button type="button" class="btn btn-danger btn-xs">Remove</button></a>
          </div>
        </div>
<?
    }
?>
<!-- 
        

        <div class="row">
          <div class="col-md-8 col-lg-8 col-sm-8">
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img src="/assets/images/meal-dessert.jpg" alt="dessert" class="img-rounded" style="height: 80px; width: 100px;">
                </a>
              </div>
              <div class="media-body">
                <h4 class="media-heading">Sugar-free Sweets</h4>
                <h5>Chef Lan Nguyen</h5>
                <p>Fruit tarts with mascarpone, home-made pudding, and cronuts.</p>
              </div>
            </div>
          </div>
          <div class="col-md-2 col-lg-2 col-sm-2">
            <h6>Date: Sunday, September 21, 2015</h6>
            <h6>Price per person: $5</h6>
          </div>
          <div class="col-md-2 col-lg-2 col-sm-2">
            <button type="button" class="btn btn-primary btn-xs">Edit</button>
            <button type="button" class="btn btn-danger btn-xs">Remove</button>
          </div>  
        </div> <!-- /.row -->
        <hr>
      </div> <!-- /.col-10 -->

      <div class="col-sm-2 col-md-2 col-lg-2 sidebar">
        <img src="/assets/images/wireframe-calendar.png" alt="calendar">
      </div> <!-- /.right-sidebar, calendar -->
    </div> <!-- /.row -->

    <div class="row">
      <div class="col-md-7 col-lg-7 col-sm-7"></div>
      <div class="col-md-2 col-lg-2 col-sm-2">
        <h4>Total: $<?= $this->cart->total() ?></h4>
        <a href="/views/checkout"><button type="button" class="btn btn-warning btn-md">Checkout</button></a>
      </div>
      <div class="col-md-3 col-lg-3 col-sm-3">

      </div>
    </div>

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
    <script type="text/javascript">
    $(document).ready(function() {
      $('.mask').hover(
        function(){
          $(this).find(".thumbnail").addClass("lowerOpacity");
        }, function(){
          $(this).find(".thumbnail").removeClass("lowerOpacity");
      })
    });
    </script>
  </body>
</html>