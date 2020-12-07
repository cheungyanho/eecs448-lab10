<?php
  $mysqli = new mysqli("database_URL", "yanhocheung", "rienei7o", "yanhocheung");
  /* check connection */
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }
  echo "<html><body>";
  echo "User " . $userName . "has posted:<br>";
  $query = 'SELECT content FROM Posts WHERE author_id="' . $userName . '";';
  if($result = $mysqli->query($query))
  {
    /* fetch associative array */
    while ($row = $result->fetch_assoc())
    {
      echo $row["content"] . "<br>";
    }
    /* free result set */
    $result->free();
  }else
  {
    echo "Nothing.<br>";
  }
  /* close connection */
  $mysqli->close();
  echo "</body></html>";
?>
