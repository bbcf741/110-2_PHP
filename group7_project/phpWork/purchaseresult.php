<?php
  require "DBconnect.php";
  $sql = "SELECT * FROM shopcar";
  $result = mysqli_query($mysql,$sql);
  $total_records=mysqli_num_rows($result);
  for ($i=0;$i<$total_records;$i++) {
    $row = mysqli_fetch_assoc($result);
    $pname=$row['name'];
    $pnum=$row['num'];
    $pcost=$row['cost'];
    $sql = "INSERT INTO product VALUES ('','testuser','$pname','$pnum','$pcost','已接收');";
    mysqli_query($mysql,$sql);
  }

  $sql = "DELETE FROM shopcar;";
  $result = mysqli_query($mysql,$sql);
  echo "<script>alert('已完成訂購');window.location.href='products.php';</script>";
?>
