<?php
  require "DBconnect.php";
  $index = $_POST['index'];
  $sql = "DELETE FROM shopcar WHERE id=$index;";
  $result = mysqli_query($mysql,$sql);
  echo "<script>alert('已成功刪除');window.location.href='shopping.php';</script>";
?>