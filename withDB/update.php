
<?php
require("DBconnect.php");
$uNo=$_GET["uNo"];

$SQL="SELECT * FROM user WHERE uNo='$uNo'";

if($result=mysqli_query($link,$SQL)){
    while($row=mysqli_fetch_assoc($result)){
        $uName=$row['uName'];
        $uPwd=$row['uPwd'];
        $uRole=$row['uRole'];
    }
}

?>

<h1>使用者更新</h1>

<form action="updateconfirm.php" method="post">
UID:<?php echo $uNo;?></br>
<input type="hidden" name ="uNo" value='<?php echo $uNo;?>'>
帳號:<input type="text" name="uName" value='<?php echo $uName;?>'></br>
密碼:<input type="text" name="uPwd" value='<?php echo $uPwd;?>'></br>

<?php
if($uRole=='user'){
    echo "Please select role:User<input type='radio' name='uRole' value='user' checked> Admin<input type='radio' name='uRole' value='admin'></br>";
}else{
    echo "Please select role:User<input type='radio' name='uRole' value='user'> Admin<input type='radio' name='uRole' value='admin' checked></br>";
}
?>

<input type="submit" value="送出更新"></br>
</form>
