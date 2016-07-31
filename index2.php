
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Will I Burn? Govhack 2016">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../favicon.ico"> -->

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
  </head>

  <body>

    <?php include 'navbar.php' ?>


<div class="container">
<h1> Alison's No-PostgreSQL test interface... </h1>

<form action="results.php">

<div class="row"> 

           <div class="col-md-4"> 

                   <legend> Select Region: 
		      <button href="#regionexp" class="btn btn-default"
			data-toggle="collapse"> (?) </button>
		   </legend>
		   <div id="regionexp" class="collapse"> 
		      Explanation here...  text text <br/>
		      elephants <br/> tigers <br/> ipineapplies <br/>
			 foxes <br/> testing <br/> 
		   </div>
		   <select name="region"> 
		       <option name="1"> Adelaide Hills </option>
		       <option name="2" selected=\"selected\"> Adelaide Metro </option>

		   </select>
		   <br/><br/>

           </div>

           <div class="col-md-4">
                   <legend> Select Month: 
		      <button href="#mon_exp" class="btn btn-default"
			data-toggle="collapse"> (?) </button>
		   </legend>
		   <div id="mon_exp" class="collapse"> 
		      explanation... 
		   </div>
                   <select name="month">
                       <option value="1"> January </option>
                       <option value="2" selected="selected"> February </option>
                       <option value="3"> March </option>
                   </select>
                   <br/><br/>
           </div>

           <div class="col-md-4"> 
		   <legend> Average Monthly Temperature: </legend>
		   <div> low  -->  high </div>
		   <input type="range" id="temp" min="0" max="100" step="10" >
		   <br/><br/>
           </div>
</div> <div class="row">  
           <div class="col-md-4"> 
		   <legend> Number of days above 35&deg;C this year (assumption): </legend>
		   <input type="range" id="hot_days" min="1" max="15" >
		   <br/><br/>
           </div>

           <div class="col-md-4"> 
		<fieldset>
		   <legend> Assume backburning has been happening recently? </legend>
		   <div class="radio-inline"> <label> 
		   <input type="radio" name="backburning" value="1"> Yes 
		   </label></div>

		   <div class="radio-inline"> <label> 
		   <input type="radio" name="backburning" value="0"> No 
		   </label></div>
		   <br/><br/>
   		</fieldset>
           </div>
     


   <div class="col-md-4">
      <input class="btn btn-lg btn-danger" type="submit" value="Calculate the Odds!">
   </div>

</div> <!-- End Row -->
</form>
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

