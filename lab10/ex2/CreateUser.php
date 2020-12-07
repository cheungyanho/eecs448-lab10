<?php
  $mysqli = new mysqli("database_URL", "yanhocheung", "rienei7o", "yanhocheung");
  $userName = $_POST["username"];
  $sameusername = false;
  /* check connection */
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }
  if($userName == "")
	{
		echo "Cannot leave the username field empty!!";
	}else
  {
    $query = "SELECT user_id FROM Users";
    if ($result = $mysqli->query($query)) {
      /* fetch associative array */
      while ($row = $result->fetch_assoc()) {
        if($row["user_id"]==$userName)
			{
				$sameusername = true;
			}
      }
      /* free result set */
      $result->free();
    }
    if($sameusername)
    {
      echo "This user already exists!";
    }
    else
    {
    	$query = "INSERT INTO Users VALUES('" . $userName . "');";
			if($result = $mysqli->query($query))
      {
        echo "Username created.";
      }
    }
  }
  /* close connection */
  $mysqli->close();
?>
