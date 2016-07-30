
<div class="container">
<h1> Will I Burn? </h1>

<form action="results2.php">

<div class="row"> 



           <div class="col-md-4"> 
		   <legend> Select Your Region: </legend>
		   <select name="region"> 
		      <option name="1"> Adelaide Hills </option>
		      <option name="2"> Adelaide Metro </option>
		   </select>
		   <br/><br/>
           </div>

           <div class="col-md-4"> 
		   <legend> Select Month: </legend>
		   <select name="month"> 
		      <option name="1"> January </option>
		      <option name="2"> February </option>
		      <option name="3"> March </option>
		      <option name="4"> April </option>
		      <option name="5"> May </option>
		      <option name="6"> June </option>
		      <option name="7"> July </option>
		      <option name="8"> August </option>
		      <option name="9"> September </option>
		      <option name="10"> October </option>
		      <option name="11"> November </option>
		      <option name="12"> December </option>
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

