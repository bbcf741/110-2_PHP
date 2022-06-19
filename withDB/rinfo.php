<?php
$uname=$_POST["name"];
$utel=$_POST["tel"];
$uemail=$_POST["email"];
$ubir=$_POST["birth"];
$usex=$_POST["gender"];
$food=$_POST["food"];
$foodsize=count($food);
$size=$_POST["size"];
$unumber=$_POST["sum"];

echo "<h1>墾丁三日遊報名資料</h1>";
echo "<b>你的姓名：</b>".$uname."先生/小姐<br/>";
echo "<b>你的電話號碼：</b>".$utel."<br/>";
echo "<b>你的Email：</b>".$uemail."<br/>";
echo "<b>你的生日：</b>".$ubir."<br/>";
if($usex=='1'){
    echo "<b>你的性別：</b>男<br/>";
}elseif($usex=='2'){
    echo "<b>你的性別：</b>女<br/>";
}else{
    echo "<b>你的性別：</b>其他<br/>";
}
echo "<b>你的飲食偏好：</b>";
for($i=0;$i<$foodsize;$i++){
    if($i==0){
        echo $food[$i];
    }else{
        echo ",".$food[$i];
    }
}
echo "<br/>";
echo "<b>你的Size：</b>".$size."<br/>";
echo "<b>你的人數：</b>".$unumber."<br/>";
?>
