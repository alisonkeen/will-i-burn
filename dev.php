
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Will I Burn? Govhack 2016">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico"> 

    <title>Will I Burn? | Govhack Unleashed 2016</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug 
         File Not included in version of bootstrap downloaded?
    <link href="bootstrap-3.3.7-dist/css/ie10-viewport-bug-workaround.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    <link href="bootstrap-3.3.7-dist/css/starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap-3.3.7-dist/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
  </head>

  <body>

    <?php include 'navbar.php' ?>


	<div class="container">
	<h1> Development process </h1>

	<div class="row">
 <div class="col-md-4">
<h3> Data Flow </h3>
<ul>
<li>Data is downlaoded from <a href="data.sa.gov.au">data.sa.gov.au</a></li>
<li>This is then improted into R to build a model</li>
<li>This website is written in php and queries the model and displays results</li>
</ul>
</div>
</div> <!-- End Row -->
<div class="row">
       <div class="col-md-4">
<img src="images\data-flow.jpg">
<span>Original work flow</span>
</div>
</div> <!-- End Row -->

<div class="row">
       <div class="col-md-4"><img src="images\whiteboard1.jpg"/>
Query page mock up
</div>
</div> <!-- End Row -->
<div class="row">
       <div class="col-md-4"><img src="images\whiteboard2.jpg"/>
Results page mock up
</div>


</div> <!-- End Row -->
<div class="row">

<h3>Source Code</h3>
Download the source code from github at: <a href="https://github.com/alexg-hacks/will-i-burn">https://github.com/alexg-hacks/will-i-burn<i class="fa fa-github" aria-hidden="true"></i></a>
</div> <!-- End Row -->
</div> <!-- End Container -->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="bootstrap-3.3.7-dist/js/jquery.min.js"><\/script>')</script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap-3.3.7-dist/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>


