
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
            <a class="navbar-brand" href="/">Home</a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">        
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/views/cart/">Your Cart <span class= "glyphicon glyphicon-shopping-cart"></span></a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Your Account<span class="caret"></span></a>
                <ul class="dropdown-menu"> 
                  <li><a href="/users/logout">Sign Out</a></li>
                </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

      <div class ="container-fluid">
<?php 
      if(isset($error)){
        echo "<div class='alert alert-warning' role='alert'>".$error."</div>";        
      }
?>        
        <div class="row">
          <div class= "form-content col-md-8">
              <div class="panel-body">               
              <div class="row">
                <div class="col-lg-8">
                 <div class="page-content">
                    <div class="container">
                      <div class="row confirm">
                        <div class="col-md-12">

                          <div class="form-horizontal">
                             
							<?php echo form_open_multipart('upload_controller/do_upload');?>

								<input type="file" name="meal_images" size="20" />

								<input type="submit" value="upload" />

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
    </div>

  


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/main.js"></script>
</html>


