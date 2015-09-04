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
          <a class="navbar-brand" href="/views/index/">Home</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      
          
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/views/how_it_works/">How It Works</a></li>

            <li><a href="/views/chef">Chef</a></li>

          
            <li><a href="/views/cart/">Your Cart <span class= "glyphicon glyphicon-shopping-cart"></span><?= count($cart)?></a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Your Account<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="/views/dashboard/">Dashboard</a></li>             
                  <li role="separator" class="divider"></li>
                  <li><a href="/users/logoff">Sign Out</a></li>              
                </ul>
              </li>
          </ul>

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>


      <div class="container">
        <div class="row">
         
          <div class="meal_list_left description">
                <h3>Chef</h3> 
                <p><?= $meal['user_name']?></p>
                <p><?= $meal['user_description']?></p> 

          </div>
          <div class="meal_list_right description">                 
                <img src="/assets/images/meal-dessert.jpg">
                <h3><?= $meal['meal_name']?></h3>

                <p><?= $meal['meal_description']?></p>
                <p>Ingredients:</p>
                <p>Servings: <?= $meal['quantity']?></p>
                <p>Location: <?= $meal['location']?></p>
                <p>Price per Person: $<?= $meal['price']?></p>


                <p>Date: <?= date('M d, Y',strtotime($meal['meal_date']))?></p>
                <form action="/items/add_to_cart" method = "post">
                  <div class="col-sm-8">
                   <label class="col-sm-6 control-label">Select quantity</label>
                    <select class="form-control" name = "quantity" required>
<?
                      for($i = 0; $i <=$meal['quantity']; $i++)
                      {
                        echo '<option value="'.$i. '">'.$i.'</option>';
                      }
?>                                
                    </select>  
                    <br>  
                  </div>
                 <? var_dump($meal) ?>
                  <div class="row">        
                    <div class="form-group">
                      <div class="col-sm-8">                   
                        <input type ="hidden" name = "meal_id" value = "<?= $meal['meal_id']?>">
                        <button type="submit" class="btn btn-warning" >Add to Cart</button>              
                      </div> 
                    </div>
                  </div>               
                </form>
              </div>

            </div>
        </div>
      
    

<!-- Get Meals Info/Photo and output them in each div.col-md-4 below -->
  
   
    
     


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

   
    <script src="/assets/js/main.js"></script>

    
  </body>
</html>