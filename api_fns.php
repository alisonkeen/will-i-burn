<?php

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
   return $response;
}


function chance_of_fire($region, $month, $temp, $hot_days, $backburning)
{
   $query_url = "http://localhost:8123/perc?month=$month&region=$region&dry=0&temp=$temp&above.35=$hot_days&burnoff=$backburning";

   $response = "[0.1234"; #http_get($query_url);
   $probability_of_fire = trim($response, "[] ");
   $percentage = (int)($probability_of_fire * 100);
   
   return $percentage;
}

?>