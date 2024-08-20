<?php
// Include AutoReload File
if(file_exists(__DIR__ .'/../autoload.php')) {
    require_once __DIR__ . '/../autoload.php';
}

?>



<!DOCTYPE html>
<html lang="en">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>zItalyFood | Free Restaurant Html5 Templates</title>
    <meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
    <meta name="author" content="www.zerotheme.com">

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="css/zerogrid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slide.css">
    <link rel="stylesheet" href="css/menu.css">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->

</head>

<body>
    <div class="wrap-body">
        <!--///////////////////////////////////////Top-->
        <div class="top">
            <div class="zerogrid">
                <ul class="number f-left">
                    <li class="mail">
                        <p><?php echo $theme_option["email"]; ?></p>
                    </li>
                    <li class="phone">
                        <p><?php echo $theme_option["phone"]; ?></p>
                    </li>
                </ul>
                <ul class="top-social f-right">
                    <?php foreach($theme_option["social"] as $icons): ?>
                    <li><a href="#"><i class="<?php echo $icons["icon"]; ?>"></i></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <!--////////////////////////////////////Header-->
        <header>
            <div class="zerogrid">
                <center>
                    <div class="logo"><a href="<?php echo $theme_option["logo"]["link"]; ?>"><img
                                src="<?php echo $theme_option["logo"]["image"]; ?>"></a></div>
                </center>
            </div>
        </header>
        <div class="site-title">
            <div class="zerogrid">
                <div class="row">
                    <h2 class="t-center"><?php echo $theme_option["sub_title"]; ?></h2>
                </div>
            </div>
        </div>
        <?php include_once __DIR__ . "/menu.php" ?>