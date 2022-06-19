<?php
//如果出現header already sent
//ob_start();

session_start();

$link = @mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'php');  // 預設使用的資料庫名稱

?>
<?php

if(isset($_COOKIE["UID"])){
	$cookieID=$_COOKIE["UID"];
	echo "歡迎".$cookieID."再度光臨";
}else{
  	echo "歡迎進入本網站"; 
}


?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>登入頁面</title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
	</head>
	<body>
		<h1>會員登入</h1>
		<form method="post" enctype="multipart/form-data">
        <label for = "uName">帳號</label>
        <input type = "text" name = "uName" id = "uName">
        <label for = "uPwd">密碼</label>
        <input type = "uPwd" name = "uPwd" id="uPwd">
        <input type = "submit" value = "登入">
    	</form>

<?php
$aID="admin";
$aPWD="admin";

// date_default_timezone_set('Asia/Taipei');
// echo date("m-d-Y H:i:s", time());
// header("Refresh:1");

if(isset($_POST["uName"])){
	if($_POST["uName"]!=null){
		$uName=$_POST["uName"];
		$uPwd=$_POST["uPwd"];

		$SQL="SELECT * FROM user WHERE uName='$uName' AND uPwd='$uPwd'";

		$result=mysqli_query($link,$SQL);

		if(mysqli_num_rows($result)==1 && $aID!=$uId && $aPWD!=$uPwd){
			$_SESSION["login"]="Yes";
			setcookie("UID",$uId,time()+17280);
			header('Location: register.php');
		}
		elseif($aID==$uId && $aPWD==$uPwd){
			$_SESSION["login"]="Yes";
			echo "管理者登入成功";
			setcookie("UID",$uId,time()+17280);
			header('Location: register.php');
		}
		else{
			$_SESSION["login"]="No";
			echo "帳號或密碼輸入錯誤";
		}	
	}else{
		echo "您未輸入帳號或密碼！";
	}
}else{
	echo "歡迎登入，請輸入帳密";
}

//如果出現header already sent
//ob_flush();
?>
	</body>
</html>