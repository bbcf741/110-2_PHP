<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>付款方式</title>

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
        height: 50px;
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
      input[type=submit]{
        width: 150px;
        height: 40px;
        text-align: center;
        position: relative;
        top: 50%;
        left: 50%;
        margin: 0px 0 0 -75px;
        cursor: pointer;
        line-height: 40px;
        border: 1px solid #000;
      }
      input[type=radio]{
        margin-top: 10px;
      }
      input[type=text]{
        width: 50px;
        height: 25px;
      }
      #checkButton{
        margin-top: 20px;
        /* text-align: center; */
      }
      #firstText{
        margin-left: 80px;
      }
      #firstSelect{
        margin-top: 5px;
        margin-left: 80px;
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
    <!-- Items Starts Here -->
    <div class="featured-page">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>付款方式</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="featured container no-gutter">

        <div class="row posts">
          <div class="item new col-md-12">
            <table id="content2" align="center" border="1" width="80%">
              <tr><td>累積金額</td>
              <td>
              <?php
                require "DBconnect.php";
                $sql = "SELECT SUM(cost) AS tcost FROM shopcar";
                $result = mysqli_query($mysql,$sql);
                $total = mysqli_fetch_assoc($result);
                echo 'NT$ '.$total['tcost'];
              ?>
              </td>
            </table>
            <div id="checkButton">
              <form action="purchaseresult.php" method="post" enctype="multipart/form-data" name="buyform">
                <input type="radio" name="buyType">貨到付款<br>
                <script>
                  address=new Array();
                  address[0]=["請選擇門市"
                  ];
                  address[1]=["請選擇門市",
                    "高雄大西店（高雄市楠梓區大學南路1186號）",
                    "高雄德中店（高雄市楠梓區德中路110號）"
                  ];
                  address[2]=["請選擇門市",
                    "晉學門市（高雄市楠梓區大學西路815.817號1樓）",
                    "學高門市（高雄市楠梓區藍田路962.966號）",
                    "學安門市（高雄市楠梓區藍田路816號）"
                  ];
                  function renew(index){
                    for(var i=0;i<address[index].length;i++)
                      document.buyform.address.options[i]=new Option(address[index][i], address[index][i]);
                      document.buyform.address.length=address[index].length;
                  }
                  function AllRenew(){
                    document.buyform.store.options[0].selected=true;
                    renew(0);
                  }
                </script>
                <select id="firstSelect" name="store" onChange="renew(this.selectedIndex);">
                    <option>請選擇店家</option>
                    <option>7-11</option>
                    <option>全家</option>
                </select>
                <select name="address">
                    <option>請選擇門市</option>
                </select>
                <br>
                <input type="radio" name="buyType" onchange="AllRenew();">信用卡<br>
                <input type="text" id="firstText" maxlength="4" name="code_1"> -
                <input type="text" maxlength="4" name="code_2"> -
                <input type="text" maxlength="4" name="code_3"> -
                <input type="text" maxlength="4" name="code_4">
                <div style="line-height:100%;">
                  <br>
                </div>
								&emsp;安全碼(CSC) <input type="text" name="csc"placeholder="" minlength="3" maxlength="4">
                <br>
                <input type="submit" value="完成訂購">
              </form>
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