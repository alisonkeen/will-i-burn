<?php
 $dbconn = pg_connect("dbname=govhack port=5432 host=localhost user=govhack password=govhack") or die("Could not connect");

  $stat = pg_connection_status($dbconn);
  if ($stat != PGSQL_CONNECTION_OK) {
      echo 'Error connecting to database';
      echo 'please contact some to take a look at this :(';
     exit;
  }    
?>
