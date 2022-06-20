<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>購物車</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/tooplate-main.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <style>
      #space{
        margin-left: 200px;
      }
      table {
        border-spacing: 0;
        width: 100%;
      }
      tr {
        text-align: center;
      }
      th {
        padding: 10px;
      }
      table tbody tr:nth-child(odd){
        background-color: #eee
      }
      table thead {
        background-color: blue;
        color: white;
      }
      table thead th:first-child {
        border-radius: 5px 0 0 0;
        border: 1px solid blue;
      }
      table thead th:last-child {
        border-radius: 0 5px 0 0;
        border-right: 1px solid blue;
      }
      table tbody tr:last-child td:first-child {
        border-radius: 0 0 0 5px;
      }
      table tbody tr:last-child td:last-child {
        border-radius: 0 0 5px 0;
      }
      input[type=button]{
        width: 150px;
        height: 40px;
        text-align: center;
        cursor: pointer;
        line-height: 40px;
        border: 1px solid #000;
      }
      #checkButton{
        margin-top: 20px;
        text-align: center;
      }
    </style>
  </head>

  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <?php
            require "DBconnect.php";
            $sql = "SELECT * FROM online;";
            $result = mysqli_query($mysql,$sql);
            if(mysqli_num_rows($result)==1){
              echo "
              <ul class='navbar-nav ml-auto'>
                <li class='nav-item active'>
                  <a class='nav-link' href='products.php'>購物
                    <span class='sr-only'>(current)</span>
                  </a>
                </li>
                <li id='space'></li>
                  <li class='nav-item'>
                    <a class='nav-link' href='shopping.php'>購物車(
                      ";
                      $sql = 'SELECT * FROM shopcar';
                      $result = mysqli_query($mysql,$sql);
                      $total_records=mysqli_num_rows($result);
                      echo $total_records;
                      echo "
                      )</a>
                  </li>
                  <li class='nav-item'>
                    <a class='nav-link' href='signout.php'>登出</a>
                  </li>
                </ul>
              ";
            }else{
              echo "
              <ul class='navbar-nav ml-auto'>
                <li class='nav-item active'>
                  <a class='nav-link' href='products.php'>購物
                    <span class='sr-only'>(current)</span>
                  </a>
                </li>
                <li id='space'></li>
                <li class='nav-item'>
                  <a class='nav-link' href='register.php'>註冊</a>
                </li>
                <li class='nav-item'>
                  <a class='nav-link' href='login.php'>登入</a>
                </li>
              </ul>
              ";
            }
          ?>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <!-- Items Starts Here -->
    <div class="featured-page">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>購物車</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="featured container no-gutter">

        <div class="row posts">
          <div class="item new col-md-12">
            <table id="content2" align="center" border="1" width="80%">
              <tr>
                <td>商品名稱</td>
                <td>數量</td>
                <td>商品價格</td>
                <td>備註</td>
                <td></td>
              </tr>
              <?php for ($i=0;$i<$total_records;$i++) {$row = mysqli_fetch_assoc($result); ?>
                <tr align="center">
                  <td><?php echo $row['name']; ?></td>     
                  <td><?php echo $row['num']; ?></td> 
                  <td><?php echo 'NT$ '.$row['cost']; ?></td>
                  <td><?php echo $row['remark']; ?></td>
                  <td>
                    <form action="deleteshop.php" method="post" enctype="multipart/form-data">
                      <input type="hidden" name="index" value="<?php echo $row['id']; ?>">
                      <input type="submit" value="刪除" style="border:none;">
                    </form>
                  </td>
                </tr>
              <?php    }   ?>
              <tr height='15'><td></td><td></td><td></td><td></td></tr>
              <tr><td>累積金額</td><td></td>
              <td>
              <?php
                require "DBconnect.php";
                $sql = "SELECT SUM(cost) AS tcost FROM shopcar";
                $result = mysqli_query($mysql,$sql);
                $total = mysqli_fetch_assoc($result);
                echo 'NT$ '.$total['tcost'];
              ?>
              </td><td></td><td></td>
            </table>
            <div id="checkButton">
              <tr><td><input type="button" value="確認並前往下一步" onclick="location.href='purchase.php'"></td></tr>
            </div>
          </div>
        </div>
    </div>

    <!-- Featred Page Ends Here -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/isotope.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 0;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>