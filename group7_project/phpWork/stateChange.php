<?php
  require "DBconnect.php";
  $state=$_POST['state'];
  $index=$_POST['index'];
  $sql = "UPDATE product SET state='$state' WHERE id=$index;";
  mysqli_query($mysql,$sql);
  header("Location: manager.php");
?>
