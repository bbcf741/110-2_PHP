<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>YNP Craft Beer Club</title>

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
    </style>
  </head>

  <body>
    <!-- Navigation -->
    <img src="image/logo.jpeg" width="15%" height="15%"><font color="#8A5A00" size="100" face="Impact" >&nbsp;YNP Craft Beer Club</font>
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
              <h1>購物</h1>
            </div>
          </div>
          <div class="col-md-8 col-sm-12">
            <div id="filters" class="button-group">
              <button class="btn btn-primary" data-filter="*">全部</button>
              <button class="btn btn-primary" data-filter=".new">最新</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="featured container no-gutter">

    <div class="row posts">
            <div id="1" class="item new col-md-4">
              <a href="single-product-1.php">
                <div class="featured-item">
                  <img src="image/product-01.jpg" alt="">
                  <h4>畢伯格－檸檬啤酒(Bitburger Radler)</h4>
                  <h6>NT$ 100</h6>
                </div>
              </a>
            </div>
            <div id="2" class="item high col-md-4">
              <a href="single-product-2.php">
                <div class="featured-item">
                  <img src="image/product-02.jpg" alt="">
                  <h4>保拉納－小麥啤酒(Paulaner Weissbier)</h4>
                  <h6>NT$ 130</h6>
                </div>
              </a>
            </div>
            <div id="3" class="item low col-md-4">
              <a href="single-product-3.php">
                <div class="featured-item">
                  <img src="image/product-03.jpg" alt="">
                  <h4>瑞福10正統修道院啤酒(Rochefort Trappistes 10)</h4>
                  <h6>NT$ 165</h6>
                </div>
              </a>
            </div>
            <div id="4" class="item low col-md-4">
              <a href="single-product-4.php">
                <div class="featured-item">
                  <img src="image/product-04.jpg" alt="">
                  <h4>女皇爵勃根第棕啤酒(Verhaeghe Duchesse De Bourgogne)</h4>
                  <h6>NT$ 130</h6>
                </div>
              </a>
            </div>
        </div>
    </div>

    <div class="page-navigation">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul>
              <li class="current-page"><a href="#">1</a></li>
              <!-- <li><a href="#">2</a></li>
              <li><a href="#">3</a></li> -->
              <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
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