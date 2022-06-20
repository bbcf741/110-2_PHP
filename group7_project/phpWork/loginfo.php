<?php
  require "DBconnect.php";
  if(isset($_POST["uaccount"])){
    if($_POST["uaccount"]!=null){
        $uname=$_POST["uaccount"];
        $upass=$_POST["upsw"];
        $sqlQuery="SELECT * 
                FROM user 
                WHERE account='$uname'
                AND password='$upass'";
        $result=mysqli_query($mysql,$sqlQuery);
        if(mysqli_num_rows($result)==1){
            $sqlQuery="INSERT INTO online VALUES ('1','$uname');";
            $result=mysqli_query($mysql,$sqlQuery);
            if($uname!="admin"){
                header("Location: index.php");
            }else{
                header("Location: manager.php");
            }
        }else{
            echo "<b><font color='#FF0000'>輸入的帳號或密碼錯誤</font></b>";
        }
    }
}
?>
