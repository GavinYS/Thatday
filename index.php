<?php
	require("functions.php");
?>

<!DOCTYPE html>
<html>
  <head>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>ThatDay - Mr.H and Mrs.Y</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/soon.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

  </head>
  <!-- START BODY -->
  <body class="nomobile">

    <!-- START HEADER -->
    <section id="header">
        <div class="container">
            <header>
                <!-- HEADLINE -->
                <h1 data-animated="GoIn"><b>Mr. H And Mrs.Y</b> That day</h1>
            </header>
            <!-- START TIMER -->
            <div id="timer" data-animated="FadeIn">
                <p id="messages">Our Love Continues...</p>
                <div class="timer_box">
                  <h1 id="mydays"><?php echo get_days();?></h1>
                  <p>Days</p>
                </div>
                <div class="timer_box">
                  <h1  id="myhours"><?php echo get_hours();?></h1>
                  <p>Hours</p>
                </div>
                <div class="timer_box">
                  <h1 id="myminutes" ><?php echo get_minutes();?></h1>
                  <p>Minutes</p>
                </div>
                <div class="timer_box">
                  <h1  id="myseconds"><?php echo get_seconds();?></h1>
                  <p>Seconds</p>                  
                </div>
            </div>
            <!-- END TIMER -->
            <div class="col-lg-4 col-lg-offset-4 mt centered">
            	<h4>Back to GavinYS's Blog</h4>
				  <a href="http://www.gavinys.com"><button class="btn btn-info">Back</button></a>        
			</div>
            
        </div>
        <!-- LAYER OVER THE SLIDER TO MAKE THE WHITE TEXTE READABLE -->
        <div id="layer"></div>
        <!-- END LAYER -->
        <!-- START SLIDER -->
        <div id="slider" class="rev_slider">
            <ul>
              <li data-transition="slideleft" data-slotamount="1" data-thumb="assets/img/slider/1.jpg">
                <img src="assets/img/slider/1.jpg">
              </li>
              <li data-transition="slideleft" data-slotamount="1" data-thumb="assets/img/slider/2.jpg">
                <img src="assets/img/slider/2.jpg">
              </li>
              <li data-transition="slideleft" data-slotamount="1" data-thumb="assets/img/slider/3.jpg">
                <img src="assets/img/slider/3.jpg">
              </li>
              <li data-transition="slideleft" data-slotamount="1" data-thumb="assets/img/slider/4.jpg">
                <img src="assets/img/slider/4.jpg">
              </li>
            </ul>
        </div>
        <!-- END SLIDER -->
    </section>
    <!-- END HEADER -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>
    	function calculate_time(){
	   	 	var seconds = document.getElementById('myseconds').innerHTML;
	    	var minutes = document.getElementById('myminutes').innerHTML;
	    	var hours = document.getElementById('myhours').innerHTML;
	    	var days = document.getElementById('mydays').innerHTML;
	    	seconds = parseInt(seconds) + 1 ;
	    	if(seconds>=60){
	    		seconds = 0;
	    		minutes = parseInt(minutes) + 1;
	    		if(minutes>=60){
	    			minutes = 0;
	    			hours = parseInt(hours) + 1;
	    			if(hours>=24){
	    				hours = 0;
	    				days = parseInt(days) +1;
	    			}
	    		}
	    	}
	    	document.getElementById('myseconds').innerHTML = seconds;
	    	document.getElementById('myminutes').innerHTML = minutes;
	    	document.getElementById('myhours').innerHTML = hours;
	    	document.getElementById('mydays').innerHTML = days;
	    	setTimeout("calculate_time()",1000);
    	}
    	setTimeout("calculate_time()",1000);
    </script>
    <script src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/soon/plugins.js"></script>
    <script src="assets/js/soon/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/js/soon/custom.js"></script>
  </body>
  <!-- END BODY -->
</html>