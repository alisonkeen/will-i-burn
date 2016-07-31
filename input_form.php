
<div class="container">

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
	  echo "  <option value=\"$row[0]\"";
	  if($row[0] == $_WIB_region) echo "selected=\"selected\"";
	  echo ">$row[1]</option>\n";
	}
			// examples of what end syntax should look like
		      // <option name="1"> Adelaide Hills </option>
		      //  <option name="2" selected=\"selected\"> Adelaide Metro </option>
?>


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
		      if($eachmonth == $_WIB_month) echo "selected=\"selected\"";
		      
		      echo "> $monthname </option>";
                      // <option value="1"> January </option>
                      // <option value="2" selected="selected"> February </option>
                      // <option value="3"> March </option>
		   } ?>
                   </select>
                   <br/><br/>
           </div>

        <div class="col-md-4">
                   <legend> Average Monthly Temperature
                <button href="#explain_temp" class="btn btn-default"
                        data-toggle="collapse"> (?) </button>
                   </legend>
                   <div id="explain_temp" class="collapse">
                      Explanation here...  text text <br/>
                      elephants <br/> tigers <br/> ipineapplies <br/>
                         foxes <br/> testing <br/>
                   </div>

                   <div> low (0&deg;C) --> high (45&deg;C) </div>

                   <input type="range" name="temp" min="0" max="45" step="5" 
			<?php echo "value=\"$_WIB_hot_days\"" ?>

		   > <!-- end input tag -->

                   <br/><br/>
           </div>



</div><div class="row"> 



           <div class="col-md-4">
                   <legend> Number of days above 35&deg;C this year (assumption):
                <button href="#explain_days" class="btn btn-default"
                        data-toggle="collapse"> (?) </button>
</legend>
                   <div id="explain_days" class="collapse">
                      Explanation here...  text text <br/>
                      what does this do? <br/>
                      what what are the parameters? <br/>
                      is this related to climate change? <br/>
                   </div>
                   <input type="range" name="hot_days" 
			<?php echo "min=\"1\" max=\"31\"";
			      echo "value=\"$_WIB_hot_days\">" ?>
                   <br/><br/>
           </div>


        <div class="col-md-4">
                   <legend> Assume backburning has been happening recently?
                <button href="#explain_burning" class="btn btn-default"
                        data-toggle="collapse"> (?) </button>
                   </legend>
                   <div id="explain_burning" class="collapse">
                      Explanation here...  text text <br/>
                      what does this do? <br/>
                      what what are the parameters? <br/>
                      is this related to climate change? <br/>
                   </div>
                   <div class="checkbox"> <label>
                   <input type="checkbox" name="backburning"
		   
                   <?php 
			if($_WIB_backburning == 1 )
			echo "checked=\"true\" " ?>
                   >
                   Yes </label></div>

                   <br/><br/>
           </div>

     

   <div class="col-md-4">
      <input class="btn btn-lg btn-danger" type="submit" value="Calculate the Odds!">
   </div>
</div> <!-- End Row -->
</form>
</div> <!-- End Container -->

