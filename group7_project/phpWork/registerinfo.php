<?php
  require "DBconnect.php";
  $uname=$_POST["uaccount"];
  $upass=$_POST["upsw"];
  $sql = "INSERT INTO user VALUES ('','$uname','$upass');";
  $result = mysqli_query($mysql,$sql);
  header("Location: login.php");
?>
