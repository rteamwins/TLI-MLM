<?php 
include('./config/db.php');

if (isset($_GET['vkey'])) {
	$vkey=$_GET['vkey'];
	$status= 0;
	$verified=1;


	$sql = "SELECT * FROM customers where verify ='".$status."' AND vkey= '".$vkey."' LIMIT 1";

	$result = $con->query($sql);

	if($result->num_rows>0){

		  $sql = "UPDATE customers SET verify='$verified' WHERE vkey='$vkey' LIMIT 1";

		  if(mysqli_query($con, $sql)) {

		  	$message="
		  		<div class='text-center'>
                  <img src='assets/img/illustrations/happiness.svg' width='400' alt='...' class='img-fluid'>
                </div><br>
		  	You account has been verified. Click on the link below to login<br><br> 
        <a href='sign-in' class='btn btn-primary'>login</a>";

		    }

	}else
		    {
		    	
		    	$message2="
          <div class='text-center'>
                  <img src='assets/img/illustrations/happiness.svg' width='400' alt='...' class='img-fluid'>
                </div><br>
          The account is invalid or you've registered already";
		    }
}else{
	die("Something went wrong");
}



?>
<!doctype html>
<html lang="en">
<!-- Copied from https://dashkit.goodthemes.co/sign-in.html by Cyotek WebCopy 1.8.0.652, Wednesday, 17 June 2020, 1:15:23 pm -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="assets/fonts/feather/feather.css">
    <link rel="stylesheet" href="assets/libs/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="assets/libs/quill/dist/quill.core.css">
    <link rel="stylesheet" href="assets/libs/highlightjs/styles/vs2015.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.13.0-web/css/all.css">

    <!-- Map -->
    <link href="mapbox-gl-js/v0.53.0/mapbox-gl.css" rel="stylesheet">

    <!-- Theme CSS -->
      
    <link rel="stylesheet" href="assets/css/theme.min.css" id="stylesheetLight">
    <link rel="stylesheet" href="assets/css/theme-dark.min.css" id="stylesheetDark">

    <style>
      body {
        display: none;
      }

    </style>
    
    <!-- Title -->
    <title>Dashkit</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="gtag/js.js?id=UA-156446909-1"></script><script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag("js", new Date());gtag("config", "UA-156446909-1");</script>

  </head>
  <body class="d-flex align-items-center bg-auth border-top border-top-2 border-primary">

    <!-- CONTENT
    ================================================== -->
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-5 col-xl-8 my-5">
          
          <!-- Heading -->
         
          
          <!-- Subheading -->
          <h3 class="text-dark text-center mb-5">
            <?php
            	if (!empty($message)) {
            		echo "$message";
            	}elseif (!empty($message2)) {
            		echo "$message2";
            	}
             ?>
          </h3>
          
          <!-- Form -->
       

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/@shopify/draggable/lib/es5/draggable.bundle.legacy.js"></script>
    <script src="assets/libs/autosize/dist/autosize.min.js"></script>
    <script src="assets/libs/chart.js/dist/Chart.min.js"></script>
    <script src="assets/libs/dropzone/dist/min/dropzone.min.js"></script>
    <script src="assets/libs/flatpickr/dist/flatpickr.min.js"></script>
    <script src="assets/libs/highlightjs/highlight.pack.min.js"></script>
    <script src="assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
    <script src="assets/libs/list.js/dist/list.min.js"></script>
    <script src="assets/libs/quill/dist/quill.min.js"></script>
    <script src="assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="assets/libs/chart.js/Chart.extension.js"></script>

    <!-- Map -->
    <script src='mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>

    <!-- Theme JS -->
    <script src="assets/js/theme.min.js"></script>
    <script src="assets/js/dashkit.min.js"></script>


  </body>
<!-- Copied from https://dashkit.goodthemes.co/sign-in.html by Cyotek WebCopy 1.8.0.652, Wednesday, 17 June 2020, 1:15:23 pm -->
</html>