<!DOCTYPE html>
<html lang="en">

	<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>註冊頁面</title>

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
	<body>
		<div id="page-wrapper">

			<!-- Header -->
	  			<div class="featured-page">
				<div class="container">
					<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="section-heading">
						<div class="line-dec"></div>
						<h1>會員註冊</h1>
						<img src="image/img.jpeg" width="130%" height="130%">
						</div>
					</div>
					</div>
				</div>
				</div>
			<!-- Features -->
				<section id="features">
					<div class="container">						
						<div class="row aln-center">
								<!-- Feature -->
									<form action="registerinfo.php" method="post" style="width: 60%;" enctype="multipart/form-data">
											<table>
												<tr>
													<td>帳號</td>
													<td><input type="text" name="uaccount"onkeyup="value=value.replace(/[^\w\.\/]/ig,'')" minlength="6" maxlength="20" placeholder="6-20個英數字" required="required"></td>
												</tr>
												<tr>
													<td>密碼</td>
													<td><input type="password" name="upsw"onkeyup="value=value.replace(/[^\w\.\/]/ig,'')" minlength="6" maxlength="20" placeholder="6-20個英數字" required="required"></td>
												</tr>
												<tr>	
												<tr>
													<td>姓名</td>
													<td><input type="text" name="uname"placeholder="" required="required"></td>
												</tr>
												<tr>
													<td>手機號碼</td>
													<td><input type="text" name="utel" minlength="10" maxlength="10" oninput="value=value.replace(/[^\d]/g,'')" pattern="[0-9]{10}"placeholder="09xxxxxxxx" required="required"></td>
												</tr>
												<tr>
													<td>電子信箱</td>
													<td><input type="email" name="uemail"placeholder="例:zxc123@gmail.com" required="required"></td>
												</tr>
												<tr>
													<td>生日</td>
													<td><input type="date" name="ubir" required="required"></td>
												</tr>
												<tr>
													<td colspan="2">
														<input type="submit" name="" value="提交註冊">
														<br>
														<br>
														<input type="button" value="已有帳號，我要登入" onclick="javascript:location.href='login.php'">
													</td>
												</tr>
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

	</body>
</html>