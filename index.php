<?php
require_once('main.class.php');
$obJ = new mainClass();
$markets = $obJ->readMarket('markets');

/**
$server = new mysqli("localhost", "root", "", "market");
$marketQuery = "SELECT * FROM markets ORDER BY marketId ASC";
$marketResult = $server->query($marketQuery);
**/
$market = '';
$marketProduct = '';
$i = 0;
//while($rowKasuwa = $marketResult->fetch_array()){
  foreach ($markets as $rowKasuwa) {
   
 if($i == 0)
 {
  $market .= '
   <li class="active"><a href="#'.$rowKasuwa["marketId"].'" data-toggle="tab">'.$rowKasuwa["marketName"].'</a></li>
  ';
  $marketProduct .= '
   <div id="'.$rowKasuwa["marketId"].'" class="tab-pane fade in active">
  ';
 }
 else
 {
  $market .= '
   <li><a href="#'.$rowKasuwa["marketId"].'" data-toggle="tab">'.$rowKasuwa["marketName"].'</a></li>
  ';
  $marketProduct .= '
   <div id="'.$rowKasuwa["marketId"].'" class="tab-pane fade">
  ';
 }
 /**
 $productQuery = "SELECT * FROM products WHERE marketId = '".$rowKasuwa["marketId"]."'";
 $productResult = $server->query($productQuery);
 **/
  $products = $obJ->readProductById('products', $rowKasuwa["marketId"]);
  $snn = 0;
  $date = date('d-m-Y h:i:s a');
 //while($row = $productResult->fetch_array()){
  if ($products) {
    foreach ($products as $key) {
    
    $marketProduct .= '
    <div class="col-md-12" style="margin-bottom:36px;">
        <span>'.++$snn.'</span> --
        <span>'.$key['productName'].'</span> --
        <span>'.$key['productPrice'].'</span> --
        <span>'.$date.'</h5>
    </div>
    ';
   }
  }else{
    echo '404 :) No Product found';
  }
 $marketProduct .= '<div style="clear:both"></div></div>';
 $i++;
}
?>

<!DOCTYPE html>
<html>
 <head>
  <title>Market Tab</title>
   <!--
  <script src="bootstrap/js/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  <script src="bootstrap/js/bootstrap.min.js"></script>
-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <div class="container">
   <h2 align="center">Market Tab</a></h2>
   <br />
   <ul class="nav nav-tabs">
   <?php
   echo $market;
   ?>
   </ul>
   <div class="tab-content">
   <br />
   <?php
   echo $marketProduct;
   ?>
   </div>
  </div>
 </body>
</html>