<?php include 'pgsql_connect.php' ?>
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
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

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
        <h1>Will I Burn?</h1>
        <div class="row">

        <p class="lead"> Find out the bushfire risk for your region </p>
         
	<form action="results.php">
       <div class="col-md-4">
	    <legend>Select Your Region:</legend>

            <select name="region">
<?php
$result = pg_query($dbconn, "select gid,region from sagovtregions");
if (!$result) {
  echo "An error occurred.\n";
  exit;
}

while ($row = pg_fetch_row($result)) {
  echo "                   <option value=\"$row[0]\">$row[1]</option>\n";
}
?>
            </select>

	    <br/><br/>
        </div> <!-- end box/cell -->

           <div class="col-md-4">
                   <legend> Select Month: </legend>
                   <select name="month">
                      <option value="1"> January </option>
                      <option value="2"> February </option>
                      <option value="3"> March </option>
                      <option value="4"> April </option>
                      <option value="5"> May </option>
                      <option value="6"> June </option>
                      <option value="7"> July </option>
                      <option value="8"> August </option>
                      <option value="9"> September </option>
                      <option value="10"> October </option>
                      <option value="11"> November </option>
                      <option value="12"> December </option>
                   </select>
                   <br/><br/>
           </div>

<div class="col-md-4">
                   <legend> Will this be a relatively hot year? </legend>
                   <input type="range" name="temp" min="0" max="100" step="10" >
                   <br/><br/>
           </div>
           <div class="col-md-4">
                   <legend> Number of days above 35.C this year (assumption): </legend>
                   <input type="range" name="hot_days" min="1" max="15" >
                   <br/><br/>
           </div>


	<div class="col-md-4">
                   <legend> Assume backburning has been happening recently? </legend>
                   <div class="checkbox"> <label>
                   <input type="checkbox" name="backburning" value="1"> Yes 
                   </label></div>

                   <br/><br/>
           </div>


        </div> <!-- end row -->

	    <input class="btn btn-lg btn-danger" type="submit" value="Calculate the Odds!">
	  </fieldset>
	</form>


      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>


