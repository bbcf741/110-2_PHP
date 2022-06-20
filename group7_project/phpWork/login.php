<?php
//如果出現header already sent
//ob_start();

session_start();

$link = @mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'php_report');  // 預設使用的資料庫名稱

?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>會員登入</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head><!DOCTYPE html>
<html lang="en">

	<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>登入頁面</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/tooplate-main.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/flex-slider.css">
    <style>
      #product{
        width: 300px;
        height: 30px;
        margin: 20px 0;
      }
      #space{
        margin-left: 200px;
      }
    </style>
	</head>

	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
	  			<div class="featured-page">
				<div class="container">
					<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="section-heading">
						<div class="line-dec"></div>
						<h1>會員登入</h1>
						</div>
					</div>
					</div>
				</div>
				</div>
			<!-- Feature -->
			<section id="features">
					<div class="container">						
						<div class="row aln-center">
								<!-- Feature -->
									<form action="loginfo.php" method="post" style="width: 60%;" enctype="multipart/form-data">
											<table>
												<tr>
													<td>帳號：</td>
													<td><input type="text" name="uaccount"onkeyup="value=value.replace(/[^\w\.\/]/ig,'')" minlength="6" maxlength="20" placeholder="" required="required"></td>
												</tr>
												<tr>
													<td>密碼：</td>
													<td><input type="password" name="upsw"onkeyup="value=value.replace(/[^\w\.\/]/ig,'')" minlength="6" maxlength="20" placeholder="" required="required"></td>
												</tr>
												<tr>
													<td colspan="2">
														<input type="submit" name="" value="登入" style="width: 100%;">
														<br>
														<input type="button" value="我要註冊" onclick="javascript:location.href='register.php'" style="width: 100%;">													
													</td>
												</tr>
											</table>												
									</form>										
						</div>
					</div>
				</section>
			<!-- Footer -->

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
<?php
// $aID="admin";
// $aPWD="5201314";

// date_default_timezone_set('Asia/Taipei');
// echo date("m-d-Y H:i:s", time());
// header("Refresh:1");

if(isset($_POST["uaccount"])){
	if($_POST["uaccount"]!=null){
		$uId=$_POST["uaccount"];
		$uPwd=$_POST["upsw"];


		$SQL="SELECT * FROM user WHERE uName='$uId' AND uPwd='$uPwd'";

		$result=mysqli_query($link,$SQL);

		if(mysqli_num_rows($result)==1){
			$_SESSION["login"]="Yes";
			setcookie("UID",$uId,time()+17280);
			header('Location: register.php');
		}else{
			echo "帳號或密碼輸入錯誤";
		}

		// if($aID==$uId && $aPWD==$uPwd){
		// 	$_SESSION["login"]="Yes";
		// 	//echo "登入成功";
		// 	setcookie("UID",$uId,time()+17280);
		// 	header('Location: register.php');
		// }else{
		// 	echo "帳號或密碼輸入錯誤";
		// }		
	}else{
		echo "您尚未輸入帳號或密碼！";
	}
}else{
	echo "";
}

//如果出現header already sent
//ob_flush();
?>
	</body>
</html>