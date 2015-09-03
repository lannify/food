<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout page</title>
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
            <li><a href="/views/chef">Chefs</a></li>
            <li><a href="#">Your Cart <span class= "glyphicon glyphicon-shopping-cart"></span></a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Your Account<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Dashboard</a></li>
                  <li><a href="#">Profile</a></li>
                  <li><a href="#">Orders</a></li>              
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Sign Out</a></li>              
                </ul>
              </li>
          </ul>

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
           
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h1>Check Out</h1>
            <p>Your Address</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, aliquam laboriosam numquam delectus corporis vero odit facilis reprehenderit voluptatum, id impedit fuga, pariatur accusamus dicta quo doloribus? Nulla, labore, totam!</p>
            <p>Your Total</p>
            <script
              src="https://checkout.stripe.com/checkout.js"
              class="stripe-button"
              data-key="pk_test_6pRNASCoBOKtIshFeQd4XMUh"
           
              data-name="Demo Site"
              data-description="2 widgets ($20.00)"
              data-amount="2000">
            </script>
          </div>
          <div class="col-md-4">
            <hr>
            <hr>
            <table class="table">
              <thead>
                <th>Item</th>
                <th>Price</th>
              </thead>
              <tbody>
                <tr>
                  <td>Item</td>
                  <td>Price</td>
                </tr>
                <tr>
                  <td>Order Sub Total:</td>
                  <td>Price</td>
                </tr>
                <tr>
                  <td>Tax:</td>
                  <td>Price</td>
                </tr>
              </tbody>
            </table>

            

          </div>
        </div>
      </div>
    </div>
    
    
  


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/main.js"></script>
  </body>
</html>