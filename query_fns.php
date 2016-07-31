<?php

function get_region_name(int $region_num)
{
   global $dbconn;

   $regions = pg_query($dbconn, "select region from sagovtregions where gid = $region_num");
   if (!$regions) {
     return "Not found ($region_num)";
   }

   return pg_fetch_result($regions, 0);
}

function get_num_backburns(int $region)
{
   // this function needs to run the R query to grab
   // the number of backburns in the last 2 years
   return 2;
}

function get_num_bushfires(int $region)
{
   // this function needs to run the R query to grab
   // the number of bushfires in the last 2 years
   return 5;
}

function get_month_name($month)
{
   if(!is_int($month)) {
       // so check if it's a numeric string and convert...
	if(is_numeric($month)) {
	   // $quicktemp = $month + 0; the cast below should skip this step?
	   // $month = $quicktemp;
	}
	else {
	   $required_fields_present = false;
	   return "not an int";
	}
   }

   $month_name = DateTime::createFromFormat('m', (int) $month)->format('F');
   return $month_name;

}




?>
