
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
    <script type="text/javascript">
   $.cloudinary.config({"api_key":"778955365652697  ","cloud_name":"foodphp"});
    </script> 
  </head>
  <body>
    <div id="new_meal">
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

      <div class ="container-fluid">
        <div class="row">
          <div class= "form-content col-md-8">
              <div class="panel-body">               
              <div class="row">
                <div class="col-lg-8">
                 <div class="page-content">
                    <div class="container">
                      <div class="row confirm">
                        <div class="col-md-12">
                          <form class="form-horizontal" role="form" action = "/meals/create" method = "post">
                              <h3 class="text-center">Add A Meal</h3>
                              <hr>
<? 
                              if ($this->session->flashdata('errors'))
                              {
                                 echo "<div class = 'red text-center'>".$this->session->flashdata('errors')."</div>";
                              }           
?>

                          <div class="form-group">
                              <label class="col-sm-3 control-label">Meal Name</label>
                              <div class="col-sm-6">
                                <input type="text" class="form-control" name = "name" placeholder="e.g. Amazing Italian Dinner" required>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Quantity</label>
                              <div class="col-sm-4">
                                <input type="number" class="form-control" name = "quantity" placeholder="How many servings " required>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Price</label>
                              <div class="col-sm-4">
                                <input type="number" class="form-control" name = "price" placeholder="Price per person" required>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Date of Meal</label>
                              <div class="col-sm-6">
                                <input type="date" class="form-control" name = "meal_date" placeholder="" required>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Category</label>
                              <div class="col-sm-4">
                                <!--   Foreach loop for Categories -->
                                <select class="form-control" name = "category" required>
<?

                                  foreach($categories as $category)
                                  {
                                    echo '<option value="{$category["name"]}">'.$category["name"].'</option>';
                                  }
?>                                
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Or add a Category</label>
                              <div class="col-sm-4">
                                <input type="text" class="form-control" name = "category" placeholder="e.g. Italian" required>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Description</label>
                              <div class="col-sm-6">
                                <textarea class="form-control" rows="8" name = "description" placeholder="Detail of meal" required></textarea>
                              </div>
                            </div>
                             <div class="form-group">
                              <label class="col-sm-3 control-label">Photos</label>
                              <div class="col-sm-6">
                                <input type="file" class="form-control" name = "meal_images" placeholder="" required>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Location</label>
                              <div class="col-sm-6">
                                <textarea class="form-control" rows="8" name = "location" placeholder="e.g. 1980 Zanker Road San Jose CA 95111" required></textarea>
                              </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-10">
                                  <button type="submit" class="btn btn-warning">Order Now</button>
                                </div>
                            </div>
                          </form>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/main.js"></script>
</html>