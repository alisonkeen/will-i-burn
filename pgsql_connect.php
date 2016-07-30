<?php
  $dbconn = pg_connect("dbname=govhack user=govhack password=govhack") or die("Could not connect");
  $stat = pg_connection_status($dbconn);
  if ($stat === PGSQL_CONNECTION_OK) {
      echo 'Connection status ok';
      pg_close($dbconn);
  } else {
      echo 'Connection status bad';
  }    
?>
