<!DOCTYPE html>
<html>
  <head>
    <title>ShoutingWords BootStrap Theme -- Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css'>
    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="_/css/style.css" rel="stylesheet" media="screen">

    <!-- load favicon -->
    <link rel="shortcut icon" href="images/favicon.png">
    <?php
      $currentFile = $_SERVER["PHP_SELF"];
      $parts = Explode('/', $currentFile);
      if ($parts[count($parts) - 1] == "contact.php") { 
      
        include "_/components/php/google-map.php";
      }               
    ?>

  </head>

  <body class="not-found">
    <div id="page" class="wrapper">
      <div class="header-area full-width">
        <header class="clearfix">
          <div class="container header-container">
            <div class="content row">
              <div class="col-lg-12">
                <header class="clearfix site-header" id="masthead" >
                  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="index.php"><img src="images/logo-small.png" alt="ShoutingWords Logo" class="visible-xs visible-sm"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                      <ul class="nav navbar-nav">
                      <!-- <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li> -->
                        <li><a href="coupon.php" title="View Coupons">Coupons</a></li>
                        <li><a href="portfolio.php" title="View Portfolio">Portfolio</a></li>
                        <li><a href="review.php" title="View Reviews">Reviews</a></li>
                        <li><a href="single.php" title="View Single Post Template">Single Post</a></li>
                        <li><a href="404.php" title="View 404 Template">404</a></li>
                        <li><a href="contact.php" title="View Contact Template">Contact</a></li>
                      </ul>
                      <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-upload"></i> Submit <b class="caret"></b></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Guest Post</a></li>
                            <li><a href="#">Post Idea</a></li>
                            <li><a href="#">Service Request</a></li>
                          </ul>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-facebook"></i> <i class="fa fa-twitter"></i> Follow us <b class="caret"></b></a>
                          <ul class="dropdown-menu">
                              <li><a href="#"><i class="fa fa-facebook-square"></i> Facebook</a></li>
                              <li><a href="#"><i class="fa fa-twitter-square"></i> Twitter</a></li>
                              <li><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
                              <li><a href="#"><i class="fa fa-rss-square"></i> RSS</a></li>
                          </ul>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-info"></i> <b class="caret"></b></a>
                          <ul class="dropdown-menu">
                              <li><a href="#">Action</a></li>
                              <li class="divider"></li>
                              <li><a href="#">Another action</a></li>
                              <li><a href="#">Something else here</a></li>
                              <li><a href="#">Separated link</a></li>
                          </ul>
                        </li>

                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i></a>
                          <ul class="dropdown-menu search-bar-top">
                            <li>
                              <form action="search" method="get" class="input-group header-searchform">
                                <input type="search" name="search" placeholder="Enter keyword or phrase" autocomplete="off" class="form-control search-bar-top" id="search_text">
                                <!-- <span class="input-group-btn">
                                  <button type="submit" class="btn btn-primary" value="Search"><i class="fa fa-search"></i></button>
                                </span> -->
                              </form>
                            </li>
                          </ul>
                        </li>

                      </ul>
                    </div><!-- /.navbar-collapse -->
                  </nav>

                  <section id="branding" class="row clearfix">
                    <div class="col col-lg-3 logo-area">
                      <a href="index.php"><img src="images/logo.png" alt="ShoutingWords Logo" class="logo hidden-xs hidden-sm"></a>
                    </div>
                    <div class="col col-lg-9 hidden-xs banner-ad">
                      <img src="images/header-banner.jpg" alt="728x90 Banner Ad" class="pull-right">
                    </div>
                  </section><!-- branding -->

                </header><!-- header -->
              </div><!-- column -->
            </div><!-- content -->
          </div><!-- header-container -->
        </header><!-- header -->
      </div><!-- header-area -->
      
      <div class="content-area full-width clearfix">
        <div class="container content-container">