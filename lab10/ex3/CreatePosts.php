<?php
  $mysqli = new mysqli("database_URL", "yanhocheung", "rienei7o", "yanhocheung");
  $userName = $_POST["username"];
	$userPost = $_POST["userpost"];
  /* check connection */
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }
  if($userName == "")
	{
		echo "Cannot leave the username field empty!!";
	}else if($userPost == "")
  {
    echo "The post has no text!!";
  }else
	{
	   $query = 'INSERT INTO Posts (author_id, content) VALUES("' . $userName . '","' . $userPost . '");';
     if($result = $mysqli->query($query))
     {
       echo "Post created.";
     }else
     {
       echo "The post was not written by an existing user!!";
     }
	  }
	/* close connection */
	$mysqli->close();
?>
