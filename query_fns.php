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

?>