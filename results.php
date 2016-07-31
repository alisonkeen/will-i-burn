<?php include 'pgsql_connect.php';
      include 'query_fns.php';
      include 'api_fns.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Will I Burn? Govhack 2016">
    <meta name="author" content="">
    <link rel="icon" href="favicon.png"> 

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

      <div class="starter-template">
	    <h1>Results Page </h1>

	    <?php 

               $required_fields_present = true;
               // Argument validation... 
               if(isset($_GET["region"]))
			$_WIB_region = $_GET["region"];
		else
		{
			$_WIB_region = 0;
			$required_fields_present = false;
		}	
               //$region = $_GET["region"];

               //$month = $_GET["month"];
               if(isset($_GET["month"]))
		{
			$_WIB_month = $_GET["month"];
		}
		else
		{
			$_WIB_month = 0;
			$required_fields_present = false;
		}	

               //$temp = $_GET["temp"];
               $_WIB_temp = isset($_GET["temp"]) ? $_GET["temp"] : 0;

               $_WIB_hot_days = isset($_GET["hot_days"]) ? $_GET["hot_days"] : 0;
               //$hot_days = $_GET["hot_days"];

               //$backburning = $_GET["backburning"];
               $_WIB_backburning = isset($_GET["backburning"]) ? $_GET["backburning"] : 0;
?>
    <div class="row">
           <div class="col-md-12">
	 	
<?php

		if(!$required_fields_present)
		{
			echo "<h1> <span class=\"label label-warning\">";
			echo "Required fields missing, couldn't model data. Try again?";
		}
		else
		{
		       $historical_odds = chance_of_fire($_WIB_region, $_WIB_month, $_WIB_temp, $_WIB_hot_days, $_WIB_backburning);
	       echo "<h1> Your chance of being in a fire: </h1>";
	       echo "<h1> <span class=\"label label-danger\"> $historical_odds % </span> </h1>";
		}

               echo "<div> You told us to assume you are in ";
	       $region_name = get_region_name($_WIB_region);
	       $month_name = get_month_name($_WIB_month);
               echo " $region_name in $month_name. <div>";

		// Tooltip for number, here. ?> 

		<button href="#explain_result" class="btn btn-default"
                 data-toggle="collapse"> (?) </button>

	         <div id="explain_result" class="collapse well">
                      Explanation here...  text text <br/>
                      elephants <br/> tigers <br/> ipineapplies <br/>
                      elephants <br/> tigers <br/> ipineapplies <br/>
                         foxes <br/> testing <br/>
                   </div>

           </div> <!-- end cell -->
</div> <div class="row">
           <div class="col-md-6">
<?php


	       // past bushfires and backburns... 
	       // these functions are defined in api_fns.php
	       $num_bushfires = get_num_bushfires($_WIB_region);
	       $num_backburns = get_num_backburns($_WIB_region);

	       echo "<div class=\"panel panel-info\"> ";
	       echo "<div class=\"panel-heading\"> ";
	       echo "<h2 class=\"panel-title\"> Historical Info: (from DEWNR data) </h2>";
	       echo "</div><div class=\"panel-body\"> ";
	       echo "In the last two years in $region_name there have been";
	       echo "<br/> - $num_bushfires wild bushfires; and";
	       echo "<br/> - $num_backburns planned backburns.";
	       echo "</div></div>";

         echo "</div><div class=\"col-md-6\">";

	       echo "<div class=\"panel panel-info\"> ";
	       echo "<div class=\"panel-heading\"> ";
	       echo "<h2 class=\"panel-title\"> Quick Facts...[this is example data!] </h2>";
	       echo "</div><div class=\"panel-body\"> ";
	       // current temps, bushfires and warnings... 
	       echo "Today's temperature is 20&deg;C";
	       echo "There are <b>no</b> current bushfires";
	       echo "There is a strong wind and storm warning current";

     echo "</div></div>"; // end quick info panel

	

	    ?>

      </div> <!--  end container? -->

        <h1> Want to change your selections? </h1>
	
	<?php // display the input form
	      include 'input_form.php' ?>


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


