<?php
  require "DBconnect.php";
  $sql = "SELECT * FROM online;";
  $result = mysqli_query($mysql,$sql);
  if(mysqli_num_rows($result)==1){
    $buyNum = $_POST['quantity'];
    $name = $_POST['name'];
    $cost = $_POST['cost'];
    $cost = (int)$cost*(int)$buyNum;
    $sql = "INSERT INTO shopcar VALUES ('','$name','$buyNum','$cost','');";
    $result = mysqli_query($mysql,$sql);
    echo "<script>alert('已加入購物車');window.location.href='products.php';</script>";
  }else{
    echo "<script>alert('請先登入');window.location.href='login.php';</script>";
  }
  
?>
