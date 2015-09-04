<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home page</title>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/main.css" rel="stylesheet">
    <link href="/assets/css/bootstrap-chosen.css" rel="stylesheet">
    <link href="/assets/css/chosen/chosen.css" rel="stylesheet">
    <link href="/assets/css/ihover.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/main.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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
<?php 
		if($this->session->userdata("current_user")['level'] == 3){ ?>
			<a class="navbar-brand" href="/views/results/">Book a Meal</a> 
<?php } else{ ?>
			<a class="navbar-brand" href="/meals/new_meal/">Add New Meal</a>
			<a class="navbar-brand" href="/views/results/">Book a Meal!</a>
		<?php }
?>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      
          <form class="navbar-form navbar-right" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
<!--             <button type="submit" class="btn btn-default">Search</button> -->
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li class="navbar-brand"><?= "Welcome ". $this->session->userdata("current_user")['name']?></li>
            <li><a class="navbar-brand" href="/users/logout/">Logout</a></li>
            </ul>

          </nav>
          <div> <!-- Div For Dashboard -->
<?php 
            if($this->session->userdata('first_login') == TRUE){
                echo "Thank you for Registering ". $this->session->userdata("current_user")['name']."<br>";
                echo "Would you Like to add a profile Picture & Description?"."<br>";
?>  
                <form action="/users/description_image/" class="form-horizontal" role="form" method="post"> <!-- Div for prompt on profile pic upload & description on registering. -->
                  <div>
                      <label>Description:</label>
                      <textarea class="form-control" rows="5" column="20" id="comment" name="description" placeholder="Add A Description"></textarea>
                      <label>Upload File</label>
                      <input type="file" name="profile" class="btn btn-default btn-file">
                <input type="submit" class="btn btn-info" value="Submit">
                </div>
                </form>
                <br>
                <div> <!-- Skip Button -->
                <form action="/users/skip/">
                  <input type="submit" class="btn btn-info" value="Skip">
                </form>
                </div>
          <?php }else{ ?>
          <div class="container">
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">View Existing Meals</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">Existing Meals Show Here</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">View Upcoming Bookings</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">Upcoming bookings show here</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Edit Profile</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">Form for Edit user profile</div>
      </div>
    </div>
  </div> 
</div>
          <?php }
           ?>
          </div>
</body>
</html>