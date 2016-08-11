<?php

$_QUERY_FNS_DEFINED = true;

function get_region_name(int $region_num)
{
   global $dbconn;

   $regions = pg_query($dbconn, "select region from sagovtregions where gid = $region_num");
   if (!$regions) {
     return "Not found ($region_num)";
   }

   return pg_fetch_result($regions, 0);
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

   switch((int) $month) {
      case 1:
	return "January";
      case 2:
	return "February";
      case 3:
	return "March";
      case 4:
	return "April";
      case 5:
	return "May";
      case 6:
	return "June";
      case 7:
	return "July";
      case 8:
	return "August";
      case 9:
	return "September";
      case 10:
	return "October";
      case 11:
	return "November";
      case 12:
	return "December";
   }

   return "undefined";

}




?>
