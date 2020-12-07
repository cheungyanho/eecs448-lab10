<?php
  $mysqli = new mysqli("database_URL", "yanhocheung", "rienei7o", "yanhocheung");
  /* check connection */
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }
  if(!empty($_POST['delete']))
  {
    foreach($_POST['delete'] as $post)
    {
      $query = 'DELETE FROM Posts WHERE post_id="' . $post . '";';
      if($result = $mysqli->query($query))
      {
        echo $post . "'s post has been deleted!!";
      }
        /* free result set */
        $result->free();
      }else
      {
        echo "Cannot delete " . $post . "'s post!";
      }
    }
  }else
  {
    echo "Nothing has been deleted.";
  }
  /* close connection */
  $mysqli->close();
?>
