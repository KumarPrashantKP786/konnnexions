<?php
require 'config.php';
?>
<!DOCTYPE html>
 <html class=>
     <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
<link rel="stylesheet" href="css/stylesheet.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    
    <?php
	include 'header.php';
	?>
	
    <body class="back_img">
	<?php
	include 'register.php';
	?>
            <div class="container container1 row">
        <div class="card card1 col-4">
          <img class="card-img-top" src="img/journey1.jpeg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">MY JOURNEY</h5>
            <p class="card-text">The journey of my life which lead me to what i am today.</p>
            <a href="#" class="btn btn-info btn-lg">See more</a>
          </div>
        </div>
        <div class="card card1 col-4" >
          <img class="card-img-top" src="img/motivation1.jpeg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Motivation</h5>
            <p class="card-text">Being motivated is one of the first thing to be done to have a perfect start for a perfect journey.</p>
            <a href="#" class="btn btn-info btn-lg">See more</a>
          </div>
        </div>
        <div class="card card1 col-4">
          <img class="card-img-top" src="img/portfolio2.jpeg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Portfolio</h5>
            <p class="card-text">Some of the detailed achievements and track records with accomplishments.</p>
            <a href="#" class="btn btn-info btn-lg " >See more</a>
          </div>
        </div>
      </div>
    </body>
    	<?php
	include 'footer.php';
	?>