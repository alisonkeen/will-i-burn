
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
	<h1> Findings </h1>

	<div class="row">
Initial Findings...So far we have looked at the fantastic bushfire and backburn history data put up by DEWNR that tells us some interesting things, such as: 
<ul>
<li>National forests seem to mostly burn out, but bushfires are stopped at the edges. We think this is due to a lack of important buildings/property, inaccessibility to firetrucks and the difficulty of creating fire breaks through a forest.</li>
<li>The risk of property damage in bigger regions (the outback) is less, so a larger outback fire has a human impact on a similar scale to a smaller one in a more built-up area. As a result, we've classed fires as 'major' based on the percentage of a region burnt, rather than the raw number of hectares.</li>
<li>There are lots of fires burnt in the large northern region of SA, where the APY lands are - there aren't listed as official DEWNR burns but we wondered whether they might be part of a recognised and intentional indigenous land management stratergy.</li>
<li>Using R, We (well, Tim) looked at using temperature as a correlation for the likelihood of bushfire events, but there doesn't appear to be a strong enough correlation to use this as a predictor (at least, not on its own). Other factors were wind speed, trans-evaporation, and vegetation density; unfortunately, data on these weren't available. In some cases, this is because it doesn't exist.</li>
</ul>
</div> <!-- End Row -->

<div class="row">
As the data we have found and looked over stands, we have the following factors: 
<ol>
<li>historical prediction based on # of fires previously</li>
<li>the size of past fires is known, so we are able to calculate what # of a region was burnt in any given month</li>
<li>BOM historical weather station data allows us to look for correlation between temperatures and bushfires</li>
<li>We are using the number of days over 35 and temperature projections as a factor to model the potential effects of climate change; a full analysis of the fantastic Goyder Institute climate model data would provide this (the user would be asked for a year instead). </li>
</ol>
</div>
<div>
This hack (especially with accurate climate projections) could be useful to:
<ul>
<li>Individuals/businesses considering building property in a fire-affected region</li>
<li>Individuals/businesses considering staying in a regional area longer term (Is it worth renting in the bush or should I stay in a Safer Place/Town?)</li>
<li>Anyone interested in the bushfire history of a given area</li>
</ul>
</div>
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


