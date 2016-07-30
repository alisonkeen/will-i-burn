<?php 

function get_region_name(int $region_num)
{

   // TODO write query here 
   $region_name = "Limestone Coast";

   return $region_name;
}

function chance_of_fire(int $region, int $month, int $temp, int $hot_days, int $backburning )
{
   $odds_of_fire = 50;
   // this is where the query goes... 

   $query_url = "http://localhost:8123/perc?month=$month&region=$region&dry=0&temp=$temp&above.35=$hot_days&burnoff=$backburning";

   // TODO run *actual* query as above. 

   return $odds_of_fire;
}
