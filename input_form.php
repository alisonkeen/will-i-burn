
<div class="container">
<h1> Want to change the parameters? </h1>

<form action="results.php">

<div class="row"> 

           <div class="col-md-4"> 

		   Region: 
		   <select name="region"> 

<?php
	$result = pg_query($dbconn, "select gid,region from sagovtregions");
	if (!$result) {
	  echo "An error occurred.\n";
	  exit;
	}

	while ($row = pg_fetch_row($result)) {
	  echo "  <option value=\"$row[0]\">$row[1]</option>\n";
	}
?>


		      <option name="1"> Adelaide Hills </option>
		      <option name="2"> Adelaide Metro </option>

		   </select>
		   <br/><br/>

           </div>

           <div class="col-md-4">
                   <legend> Select Month: </legend>
                   <select name="month">
		<?php 
		   for($eachmonth = 1; $eachmonth < 13; $eachmonth++)
		   {
                      $monthname = get_month_name($eachmonth);
                      echo "<option value=\"$eachmonth\"";
		      if($eachmonth == $month) echo "selected=\"selected\"";
		      
		      echo "> $monthname </option>";
                      // <option value="1"> January </option>
                      // <option value="2" selected="selected"> February </option>
                      // <option value="3"> March </option>
		   } ?>
                   </select>
                   <br/><br/>
           </div>

           <div class="col-md-4"> 
		   <legend> Will this be a relatively hot year? </legend>
		   <input type="range" id="temp" min="0" max="100" step="10" >
		   <br/><br/>
           </div>
           <div class="col-md-4"> 
		   <legend> Number of days above 35.C this year (assumption): </legend>
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
     


</div> <!-- End Row -->
<div class="row">
   <div class="col-md-4">
      <input class="btn btn-lg btn-danger" type="submit" value="Calculate the Odds!">
   </div>
</div> <!-- End Row -->
</form>
</div> <!-- End Container -->

