<?php
session_start();
include('includes/config.php');
include 'time.php';

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Our Markets | Home Pages </title>
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="./assets/vendors/mdi/css/materialdesignicons.min.css" />
  <link rel="stylesheet" href="assets/vendors/aos/dist/aos.css/aos.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- End plugin css for this page -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />

  <!-- inject:css -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- endinject -->
  <style>
/* Style the tab */
.tab {
border: 1px solid #ccc;
background-color: transparent;
 height:auto;
 margin:0 auto;
 display: flex;
}

/* Style the buttons inside the tab */
.tab button {
font-weight: bold;
background: transparent;
border: none;
outline: none;
cursor: pointer;
padding: 14px 16px;
transition: 0.3s;
font-size: 15px;
font-family: Georgia, 'Times New Roman', Times, serif;
}

/* Change background color of buttons on hover */
.tab button:hover {
color:#ff7846;
}

/* Create an active/current tablink class */
.tab button.active {
color:#ff7846;
}

/* Style the tab content */
.tabcontent {
display: none;
padding: 6px 12px;
border: 1px solid #ccc;
border-top: none;
}


.topnav {
overflow: hidden;
background-color: transparent;
}

.topnav a {
float: left;
display: block;
color: #ff7846;
text-align: center;
padding: 14px 16px;
text-decoration: none;
font-size: 17px;
}

.active {
background-color: transparent;
color: #ff7846;
}

.topnav .icon {
display: none;
}

.dropdown {
float: left;
overflow: hidden;
}

.dropdown .dropbtn {
font-size: 17px;
border: none;
outline: none;
color: white;
padding: 14px 16px;
background-color: inherit;
font-family: inherit;
margin: 0;
}

.dropdown-content {
display: none;
position: absolute;
background-color: #f9f9f9;
min-width: 160px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 1;
}

.dropdown-content a {
float: none;
color: black;
padding: 12px 16px;
text-decoration: none;
display: block;
text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
background-color: #555;
color: white;
}

.dropdown-content a:hover {
background-color: #ddd;
color: black;
}

.dropdown:hover .dropdown-content {
display: block;
}

@media screen and (max-width: 600px) {
.topnav a:not(:first-child), .dropdown .dropbtn {
 display: none;
}
.topnav a.icon {
 float: right;
 display: block;
}
}

@media screen and (max-width: 600px) {
.topnav.responsive {position: relative;}
.topnav.responsive .icon {
 position: absolute;
 right: 0;
 top: 0;
}
.topnav.responsive a {
 float: none;
 display: block;
 text-align: left;
}
.topnav.responsive .dropdown {float: none;}
.topnav.responsive .dropdown-content {position: relative;}
.topnav.responsive .dropdown .dropbtn {
 display: block;
 width: 100%;
 text-align: left;
}
}
  * {box-sizing: border-box}
  .mySlides1, .mySlides2 {display: none}
  img {vertical-align: middle;}

  /* Slideshow container */
  .slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
  }

  /* Next & previous buttons */
  .prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -22px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
  }

  /* Position the "next button" to the right */
  .next {
    right: 0;
    border-radius: 3px 0 0 3px;
  }

  /* On hover, add a grey background color */
  .prev:hover, .next:hover {
    background-color: #f1f1f1;
    color: black;
  }

  #myBtn {
    width: 200px;
    font-size: 18px;
    padding: 10px;
    border: none;
    background: #000;
    color: #fff;
    cursor: pointer;
  }

  #myBtn:hover {
    background: #ddd;
    color: black;
  }
</style>
</head>

<body>
  <div class="container-scroller">
    <div class="main-panel">
      <!-- partial:partials/_navbar.html -->
      <header id="header">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light">
            <div class="navbar-bottom">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <H2 style="color: white; font-weight: 900;">OUR-MARKETS</H2>
                </div>
                <div>
                  <button class="navbar-toggler" type="button" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="navbar-collapse justify-content-center collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-lg-flex justify-content-between align-items-center">
                      <li> <button class="navbar-close"> <i class="mdi mdi-close"></i> </button>
                      </li>
                      <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" href="#">ACTIVITIES</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#"><i class="fa fa-dot-circle"></i>&nbsp;Local Activity</a>
                          <a class="dropdown-item" href="#"><i class="fa fa-check-square"></i>&nbsp;International Activities</a>
                        </div>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"  href="#">Markets data</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#"><i class="fa fa-globe-africa">&nbsp;West African Markets</i></a>
                          <a class="dropdown-item" href="#"><i class="fa fa-check-square">&nbsp;Commodities</i></a>
                          <a class="dropdown-item" href="#"><i class="fa fa-check-square">&nbsp;Markets</i></a>
                          <a class="dropdown-item" href="#"><i class="fa fa-check-square">&nbsp;Markets Price List</i></a>
                          <a class="dropdown-item" href="#"><i class="fa fa-check-square">&nbsp;List of Commodities</i></a>
                          <a class="dropdown-item" href="#"><i class="fa fa-check-square">&nbsp;Essential Commodities</i></a>
                        </div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="pages/aboutus.php" class="nav-link">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="pages/contactus.php">Contact</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="pages/contactus.php">News</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <ul class="social-media">
                  <li>
                    <a href="#">
                      <i class="mdi mdi-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="mdi mdi-youtube"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="mdi mdi-twitter"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <div class="jumbotron jumbotron-fluid"">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="d-lg-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center">
                <span class="badge badge-danger mr-3">Flash news</span>
                <?php

                $offset = 1;
                $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
                $result = mysqli_query($con,$total_pages_sql);
                $total_rows = mysqli_fetch_array($result)[0];

                $query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset");
                while ($row=mysqli_fetch_array($query)) {
                  $date = $row['postingdate']
                  ?>
                  <marquee><p class="mb-0">
                    <?php echo $row['posttitle'];?>
                  </p></marquee>
                <?php } ?>
              </div>
              <div class="d-flex">
                <span class="mr-3 text-danger"> <?php echo date("l jS \of F Y ");?></span>

              </div>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="assets/images/dashboard/one.jpeg"  alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/dashboard/two.jpeg"  alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/dashboard/three.jpeg"  alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/dashboard/yankaba.jpg"  alt="Third slide">
              </div>
            </div>

</div></div>
      <div class="content-wrapper">

        <div class="mySlides1">
          <img src="img_nature_wide.jpg" style="width:100%">
        </div>
        <div class="container">
          <div class="row" data-aos="fade-up">
            <div class="col-xl-8 stretch-card grid-margin">
              <div class="position-relative rotate-img">
                <video autoplay muted loop id="myVideo" class="img-fluid" > <source src="mq.mp4" type="video/mp4"></video>
                  <div class="banner-content">
                    <div class="badge badge-danger fs-12 font-weight-bold mb-3">
                      Today News
                    </div>
                    <h1 class="mb-0"></h1>
                    <h1 class="mb-2">
                      Maigatari international cow market
                    </h1>
                    <div >
                      <button id="myBtn" onclick="myFunction()" class="video-icon">
                        <i class="mdi mdi-play"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 stretch-card grid-margin">
                <div style="background:#74B72E;" class="card  text-white">
                  <div class="card-body">
                    <h2>Latest News</h2>
                    <?php
                    if (isset($_GET['pageno'])) {
                      $pageno = $_GET['pageno'];
                    } else {
                      $pageno = 1;
                    }
                    $offset = 3;
                    $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
                    $result = mysqli_query($con,$total_pages_sql);
                    $total_rows = mysqli_fetch_array($result)[0];
                    $query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset");
                    while ($row=mysqli_fetch_array($query)) {
                      $date = $row['postingdate']
                      ?>

                      <div
                      class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between">
                      <div class="pr-3">
                        <h5><?php echo htmlentities($row['posttitle']);?> </h5>
                        <div class="fs-12">
                          <span class="mr-2">Post on </span><?php echo Time_Convert($row['posttitle']);?>
                        </div>
                      </div>
                    </div>

                  <?php } ?>
                </div>
              </div>
            </div>
          </div>

          <div class="row" data-aos="fade-up">
            <div class="col-lg-3 stretch-card grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4>Market Categories</h4>
                  <?php $query=mysqli_query($con,"select id,CategoryName from tblcategory");
                  while($row=mysqli_fetch_array($query))
                  {
                    ?>
                    <ul class="vertical-menu">
                      <li>
                        <a href="./pages/category.php?catid=<?php echo htmlentities($row['id'])?>"><?php echo htmlentities($row['CategoryName']);?></a>
                      </li>
                    <?php } ?>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-9 stretch-card grid-margin">
              <div class="card">
                <div class="card-body table-responsive">
                  <h4>CURRENT MARKET PRICES</h4>
                  <table>
                      <thead>
                        <tr>
                  <?php

                  $query=mysqli_query($con,"Select * from tblmarket");
                  while($row=mysqli_fetch_array($query)){
                      $id = $row['SubCategoryId'];
                      $ids = $row['id'];
                    ?>
                  <div class="tab">
                          <th>
                    <button class="tablinks" onclick="openCity(event, '<?php echo $ids; ?>')"><?php echo htmlentities($row['SubCategoryId']);?></button>
                  </th>
                    </div>
                  <?php

              } ?>
              </tr>
              </thead>

            </table>

                  <!-- ADD ITEMS -->
                  <div id='<?php echo $ids;?>' class="tabcontent">
                  <div class="table-responsive">
                    <table class="table">
                        <tr>
                          <td>#</td>
                          <td>Commodities</td>
                          <td>prices</td>
                          <td>date</td>
                        </tr>
                      <tbody>
                        <?php
                        if (isset($_GET['pageno'])) {
                          $pageno = $_GET['pageno'];
                        } else {
                          $pageno = 1;
                        }
                        $no_of_records_per_page = 10;
                        $offset = ($pageno-1) * $no_of_records_per_page;
                        $total_pages_sql = "SELECT COUNT(*) FROM tblmarket";
                        $result = mysqli_query($con,$total_pages_sql);
                        $total_rows = mysqli_fetch_array($result)[0];
                        $total_pages = ceil($total_rows / $no_of_records_per_page);
                        $query=mysqli_query($con,"Select  id, SubCategoryId, item1, item2, PostingDate, UpdationDate from tblmarket where SubCategoryId = '$id' AND Is_Active=1 order by id desc  LIMIT $offset, $no_of_records_per_page");
                        $cnt=1;
                        while($row=mysqli_fetch_array($query)){

                          ?>
                          <tr>
                            <th scope="row"><?php echo htmlentities($cnt);?></th>
                            <td><?php echo htmlentities($row['item1']);?></td>
                            <td><?php echo htmlentities($row['item2']);?></td>
                            <td><?php echo htmlentities($row['PostingDate']);?></td>
                            <td><a href="#">
                              <i class="fa fa-refresh fa-spin" title="click to search data"></i></a></td>
                            </tr>
                          </tbody>
                          <?php
                          $cnt++;
                        } ?>
                      </table>
                  </div>
                  </div>
                  <?php //} ?>
                  <!--END-->

                  </div>
                </div>
              </div>
            </div>
            <div class="row" data-aos="fade-up">
              <div class="col-sm-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <?php
                    if (isset($_GET['pageno'])) {
                      $pageno = $_GET['pageno'];
                    } else {
                      $pageno = 1;
                    }
                    $no_of_records_per_page = 6;
                    $offset = ($pageno-1) * $no_of_records_per_page;

                    $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
                    $result = mysqli_query($con,$total_pages_sql);
                    $total_rows = mysqli_fetch_array($result)[0];
                    $total_pages = ceil($total_rows / $no_of_records_per_page);


                    $query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
                    while ($row=mysqli_fetch_array($query)) {
                      ?>
                      <div class="row">
                        <div class="col-sm-4 grid-margin">
                          <div class="position-relative">
                            <div class="rotate-img">
                              <img src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>" class="img-fluid"/>
                            </div>
                            <div class="badge-positioned">
                              <span class="badge badge-danger font-weight-bold">News</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-8  grid-margin">
                          <h2 class="mb-2 font-weight-600">
                            <?php echo htmlentities($row['posttitle']);?></a>
                          </h2>
                          <div class="fs-13 mb-2">
                            <span class="mr-2">Post on </span><?php echo Time_Convert($row['posttitle']);?>
                          </div>
                          <div class="fs-13 mb-2">
                            <p><b>Markets : </b> <a href="./pages/news-details.php?catid=<?php echo htmlentities($row['cid'])?>"><?php echo htmlentities($row['category']);?></a> </p>
                          </div>
                          <a href="./pages/news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="btn btn-primary">Read More &rarr;</a>
                        </div>
                      </div>
                    <?php } ?>

                  </div>
                </div>
              </div>
            </div>
            <div class="row" data-aos="fade-up">
              <div class="col-sm-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-8">
                        <div class="card-title">
                          Latest  Video
                        </div>
                        <div class="row">
                          <div class="col-sm-6 grid-margin">
                            <div class="position-relative">
                              <div class="rotate-img">
                                <img src="assets/images/dashboard/dawanau1.jpeg" alt="thumb" class="img-fluid"/>
                              </div>
                              <div class="badge-positioned w-90">
                                <div
                                class="d-flex justify-content-between align-items-center">
                                <span class="badge badge-danger font-weight-bold">Dawanau Market</span>
                                <div class="video-icon">
                                  <i class="mdi mdi-play"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-6 grid-margin">
                          <div class="position-relative">
                            <div class="rotate-img">
                              <img src="assets/images/dashboard/yankaba.jpeg" alt="thumb" class="img-fluid"/>
                            </div>
                            <div class="badge-positioned w-90">
                              <div class="d-flex justify-content-between align-items-center">
                                <span class="badge badge-danger font-weight-bold">Yan Kaba Market</span>
                                <div class="video-icon">
                                  <i class="mdi mdi-play"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 grid-margin">
                          <div class="position-relative">
                            <div class="rotate-img">
                              <img src="assets/images/dashboard/yan lemo.jpeg" alt="thumb" class="img-fluid"/>
                            </div>
                            <div class="badge-positioned w-90">
                              <div class="d-flex justify-content-between align-items-center">
                                <span class="badge badge-danger font-weight-bold">Yan Lemo Market</span>
                                <div class="video-icon">
                                  <i class="mdi mdi-play"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-6 grid-margin">
                          <div class="position-relative">
                            <div class="rotate-img">
                              <img src="assets/images/dashboard/yankaba.jpg" alt="thumb" class="img-fluid"/>
                            </div>
                            <div class="badge-positioned w-90">
                              <div class="d-flex justify-content-between align-items-center">
                                <span class="badge badge-danger font-weight-bold">Yan Kura market</span>
                                <div class="video-icon">
                                  <i class="mdi mdi-play"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="badge badge-danger card-title">
                          Most Trending Markets
                        </div>

                      </div>
                      <div class="d-flex justify-content-between align-items-center border-bottom pb-2">
                        <div class="div-w-80 mr-3">
                          <div class="rotate-img">
                            <img src="assets/images/dashboard/dawanau1.jpeg" alt="thumb" class="img-fluid"/>
                          </div>
                        </div>
                        <h3 class="font-weight-600 mb-0">
                          Dawanau Markets
                        </h3>
                      </div>
                      <div class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2">
                        <div class="div-w-80 mr-3">
                          <div class="rotate-img">
                            <img src="assets/images/dashboard/yankaba.jpg" alt="thumb" class="img-fluid"/>
                          </div>
                        </div>
                        <h3 class="font-weight-600 mb-0">
                          Yan Kura Market
                        </h3>
                      </div>
                      <div class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2">
                        <div class="div-w-80 mr-3">
                          <div class="rotate-img">
                            <img src="assets/images/dashboard/yankaba.jpeg" alt="thumb" class="img-fluid" />
                          </div>
                        </div>
                        <h3 class="font-weight-600 mb-0">
                          Yan Kaba Market
                        </h3>
                      </div>
                      <div class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2" >
                        <div class="div-w-80 mr-3">
                          <div class="rotate-img">
                            <img src="assets/images/dashboard/yan lemo.jpeg" alt="thumb" class="img-fluid" />
                          </div>
                        </div>
                        <h3 class="font-weight-600">
                          Yan Lemo Market
                        </h3>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_footer.html -->
      <footer>
        <div class="footer-top">
          <div class="container">
            <div class="row">
              <div class="col-sm-5">
                <H3 class="footer-logo">OUR-MARKETS</H3>
                <h5 class="font-weight-normal mt-4 mb-5">
                   Our Markets Nigeria is your number stop to get real time updates on market commodity prices and latest news of the markets nationwide
                </h5>
                <ul class="social-media mb-3">
                  <li>
                    <a href="#">
                      <i class="mdi mdi-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="mdi mdi-youtube"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="mdi mdi-twitter"></i>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-sm-4">
                <h3 class="font-weight-bold mb-3">ACTIVITIES</h3>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="footer-border-bottom pb-2">
                      <div class="row">
                        <div class="col-9">
                          <h5 class="mb-0 font-weight-600">
                            Local Activity
                          </h5>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="footer-border-bottom pb-2 pt-2">
                      <div class="row">

                        <div class="col-9">
                          <h5 class="font-weight-600">
                            Price Update
                          </h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-sm-3">
                <h3 class="font-weight-bold mb-3">MARKETS</h3>
                <div class="footer-border-bottom pb-2">
                  <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 font-weight-600">Resource Markets</h5>

                  </div>
                </div>
                <div class="footer-border-bottom pb-2 pt-2">
                  <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 font-weight-600">End-User Markets</h5>

                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="footer-bottom">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="d-sm-flex justify-content-between align-items-center">
                  <div class="fs-14 font-weight-600 text-white">
                    © 2021 @ <a href="#" target="_blank" class="text-white"> OUR-MARKETS</a>. All rights reserved.
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>

      <!-- partial -->
    </div>
  </div>
  <!-- inject:js -->
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="assets/vendors/aos/dist/aos.js/aos.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="./assets/js/demo.js"></script>
  <script src="./assets/js/jquery.easeScroll.js"></script>
  <!-- End custom js for this page-->
  <script>
  var video = document.getElementById("myVideo");
  var btn = document.getElementById("myBtn");

  function myFunction() {
    if (video.paused) {
      video.play();
      btn.innerHTML = "Pause";
    } else {
      video.pause();
      btn.innerHTML = "Play";
    }
  }
</script>
<!-- another secript-->
  <script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>
