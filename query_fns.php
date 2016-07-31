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

function chance_of_fire(int $region, int $month, int $temp, int $hot_days, int $backburning)
{
   $odds_of_fire = 50;
   // this is where the query goes... 

   $query_url = "http://localhost:8123/perc?month=$month&region=$region&dry=0&temp=$temp&above.35=$hot_days&burnoff=$backburning";

   // TODO run *actual* query as above. 

   return $odds_of_fire;
}

?>