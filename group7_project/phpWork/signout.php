<?php
  require "DBconnect.php";
  $sql = "DELETE FROM online WHERE id=1;";
  $result = mysqli_query($mysql,$sql);
  header("Location: index.php");
?>
