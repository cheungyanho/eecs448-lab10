<?php
  $mysqli = new mysqli("database_URL", "yanhocheung", "rienei7o", "yanhocheung");
  /* check connection */
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }
  echo "<html><body>";
  $query = 'SELECT user_id FROM Users';
  echo "Users:<br>";
  if($result = $mysqli->query($query))
  {
    /* fetch associative array */
    while ($row = $result->fetch_assoc())
    {
      echo "<br>" . $row["user_id"] . "<br>";
    }
    /* free result set */
    $result->free();
  }
  /* close connection */
  $mysqli->close();
  echo "</body></html>";
?>
