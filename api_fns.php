<?php

$_API_FNS_DEFINED = true;

function log_info($message) {
   error_log("$message\n", 3, '/var/log/apache2info/info.log');
}

function http_get($url)
{
   $cinit = curl_init();
   curl_setopt($cinit, CURLOPT_URL, $url);
   curl_setopt($cinit, CURLOPT_HEADER, 0);
   curl_setopt($cinit, CURLOPT_TIMEOUT, 10);
   curl_setopt($cinit, CURLOPT_FOLLOWLOCATION, 1);
   curl_setopt($cinit, CURLOPT_RETURNTRANSFER, 1);
   $response = curl_exec($cinit);
   curl_close($cinit);

   log_info("Request: $url\nResponse: $response");
   return $response;
}


function chance_of_fire($region, $month, $temp, $hot_days, $backburning)
{
   $query_url = "http://localhost:8123/perc?month=$month&region=$region&temp=$temp&above.35=$hot_days";

   $response = http_get($query_url);
   $probability_of_fire = trim($response, "[] ");
   $percentage = round($probability_of_fire * 100, 1);
   
   return $percentage;
}

function get_num_backburns(int $region)
{
   // this function needs to run the query to grab 
   // the number of backburns in the last 2 years... 
   return 2;
}

function get_num_bushfires(int $region)
{
   // this function needs to run the R query to grab
   // the number of bushfires in the last 2 years...
   return 4;
}

?>
