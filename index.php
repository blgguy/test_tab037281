<?php
require_once('main.class.php');
$obJ = new mainClass();
$markets = $obJ->readMarket('markets');

$market = '';
$marketProduct = '';
$i = 0;
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
    $marketProduct .= '404 :) No Product found';
  }
 $marketProduct .= '<div style="clear:both"></div></div>';
 $i++;
}
?>

<!DOCTYPE html>
<html>
 <head>
  <title>Market Tab</title>
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