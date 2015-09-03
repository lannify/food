
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
            <h2>Add A New Meal</h2>            
              <div class="row">
                <div class="col-lg-8">
<? 
                  if ($this->session->flashdata('errors'))
                  {
                     echo "<div class = 'red'>".$this->session->flashdata('errors')."</div>";
                  }           
?>
                  <form action="/meals/create" method="post" role="form" style="display: block;">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="Name of Meal" value="">
                    </div>
                    <div class="form-group">
                      <input type="text" name="description" class="form-control" placeholder="Description" value="">
                    </div>
                    <div class="form-group">
                    <label>Select Meal Category</label>
                      <select name= "category">
                        <option value="Chinese" class="form-control">Chinese</option>
                      </select>
                      <input type="text" name="category" class="form-inline" placeholder="Or add new Category" value="">
                    </div>
                    <div class="form-group">
                      <input type="file" name="meal_images" placeholder="Photos" data-icon="false">
                    </div>
                    <div class="form-group">
                      <input type="text" name="location" class="form-control" placeholder="Location" value="">
                    </div>
                    <div class="form-group">
                      <input type="date" name="meal_date" class="form-control" placeholder="Date of Meal" value="">
                    </div>
                    <div class="form-group">
                      <input type="number" name="quantity" class="form-control" placeholder="Serving(s)" value="">
                    </div>
                    <div class="form-group">
                      <input type="text" name="price" class="form-control" placeholder="Price" value="">
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                          <input type="hidden" name="user_id" value="<?= $this->session->userdata('user_id') ?>">
                          <input type="submit"  class="form-control btn btn-default" value="Create New Meal">
                        </div>
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

  


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/main.js"></script>
</html>