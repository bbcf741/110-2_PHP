<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>保拉納－小麥啤酒(Paulaner Weissbier)</title>

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
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <!-- <a class="navbar-brand" href="#"><img src="assets/images/header-logo.png" alt=""></a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="products.php">購物
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li id="space"></li>
            <li class="nav-item">
              <a class="nav-link" href="shopping.php">購物車(
                <?php
                  require "DBconnect.php";
                  $sql = "SELECT * FROM shopcar";
                  $result = mysqli_query($mysql,$sql);
                  $total_records=mysqli_num_rows($result);
                  echo $total_records;
                ?>
                )</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">登出</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <!-- Single Starts Here -->
    <div class="single-product">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1></h1>
            </div>
          </div>
          <div class="col-md-6">
            <div class="product-slider">
              <div id="slider" class="flexslider">
                <ul class="slides">
                  <li>
                    <img src="image/product-02.jpg" />
                  </li>
                  <li>
                    <img src="image/product-02-2.jpeg" />
                  </li>
                  <!-- items mirrored twice, total of 12 -->
                </ul>
              </div>
              <div id="carousel" class="flexslider">
                <ul class="slides">
                  <li>
                    <img src="image/product-02.jpg" />
                  </li>
                  <li>
                    <img src="image/product-02-2.jpeg" />
                  </li>
                  <!-- items mirrored twice, total of 12 -->
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <?php
                $name='保拉納－小麥啤酒(Paulaner Weissbier)';
                $cost='130';
                $brand='品牌：Paulaner Brauerei保拉納';
                $type='類型：Weissbier小麥啤酒';
                $capacity='容量：500ml';
                $AVB='AVB：5.5%';
              ?>
              <br>
              <h3><?php echo $name ?></h3>
              <hr>
              <div class="down-content">
                <div>
                <font color="#8A5A00" size="4" face="monospace" >
                <?php echo $brand ?><br>
                <?php echo $type ?><br>
                <?php echo $capacity ?><br>
                <?php echo $AVB ?></font>
                </div>
                <div class="categories">
                  <h6>
                    <ul>
                      <li id="product">酵母小麥啤酒，世界上最受歡迎的啤酒之一</li>
                      <li id="product">具香蕉、芒果和鳳梨的味道</li>
                      <li id="product">甜味和苦味達成平衡</li>
                    </ul>
                  </h6>
                </div>
                <div class="product_meta">
                  分類：
                  <a href="https://beer-bee.com/product-category/hot-sale/" rel="tag">白啤酒</a>,  
                  <a href="https://beer-bee.com/product-category/special-price/" rel="tag">德國</a>
                </div>
              <br>
              <font color="#E60000" size="5">NT$<?php echo $cost ?></font>
              <br>
              <br>
              <form action="shopresult.php" method="post" enctype="multipart/form-data">
                <label for="quantity">數量：</label>
                <input name="quantity" type="quantity" class="quantity-text" id="quantity" name="quantity"
                	onfocus="if(this.value == '1') { this.value = ''; }" 
                    onBlur="if(this.value == '') { this.value = '1';}"
                    value="1">
                <input type="hidden" name="name" value="<?php echo $name ?>">
                <input type="hidden" name="cost" value="<?php echo $cost ?>">
                <input type="submit" class="button" id="check" value="加入購物車">
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Single Page Ends Here -->


    <!-- Similar Starts Here -->
    <div class="featured-items">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>你可能會喜歡……</h1>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-carousel owl-theme">
            <a href="single-product-1.php">
                <div class="featured-item">
                  <img src="image/product-01.jpg" alt="">
                  <h4>畢伯格－檸檬啤酒(Bitburger Radler)</h4>
                  <h6>NT$100</h6>
                </div>
              </a>
              <a href="single-product-2.php">
                <div class="featured-item">
                  <img src="image/product-02.jpg" alt="">
                  <h4>保拉納－小麥啤酒(Paulaner Weissbier)</h4>
                  <h6>NT$130</h6>
                </div>
              </a>
              <a href="single-product-3.php">
                <div class="featured-item">
                  <img src="image/product-03.jpg" alt="">
                  <h4>瑞福10正統修道院啤酒(Rochefort Trappistes 10)</h4>
                  <h6>NT$165</h6>
                </div>
              </a>
              <a href="single-product-4.php">
                <div class="featured-item">
                  <img src="image/product-04.jpg" alt="">
                  <h4>女皇爵勃根第棕啤酒(Verhaeghe Duchesse De Bourgogne)</h4>
                  <h6>NT$130</h6>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Similar Ends Here -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/flex-slider.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
