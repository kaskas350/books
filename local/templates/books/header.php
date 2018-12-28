<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
<title><?$APPLICATION->ShowTitle();?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="../../../bitrix/urlrewrite.php">




  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/core.css">


    <?

      $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/shortcode/shortcodes.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/bootstrap.min.css");
      $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/jquery-ui.min.css");
      $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/material-design-iconic-font.min.css");
      $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/owl.carousel.min.css");
      $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/owl.theme.default.min.css");
      $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/responsive.css");
      $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/style-customizer.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/core.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/style.css");


    $APPLICATION->ShowHead(); ?>


</head>

<body>
<?  $APPLICATION->ShowPanel();
?>





<!-- Body main wrapper start -->
<div class="wrapper fixed__footer">
    <!-- Start Header Style -->
    <header id="header" class="htc-header header--3 bg__white">
        <!-- Start Mainmenu Area -->
        <div id="sticky-header-with-topbar" class="mainmenu__area sticky__header">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
                        <div class="logo">
                            <a href="/">
                                <img src="<?=SITE_TEMPLATE_PATH?>/images/logo/logo.png" alt="loo">
                            </a>
                        </div>
                    </div>
                    <!-- Start MAinmenu Ares -->
                    <div class="col-md-8 col-lg-8 col-sm-6 col-xs-6">
                        <nav class="mainmenu__nav hidden-xs hidden-sm">

                        </nav>

                    <!-- End MAinmenu Ares -->
                    <div class="col-md-2 col-sm-4 col-xs-3">
                        <ul class="menu-extra">
                            <li><a href="/User/search.php"><span class="ti-search"></span></a> </li>
                            <li><a href="/User/registration.php"><span class="ti-user"></span></a></li>
                            <li><a href="/User/profile.php"><?=$USER->GetLogin();?></a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </header>

<!--    Начало боковой панели  -->
    <section class="htc__product__area pb--100 bg__white">
        <div class="container">
            <div class="row">
                <div class="col-md-3" style="top: -20px;">
                    <div class="product-categories-all">
                        <div class="product-categories-title">
                            <h3>Книги</h3>
                        </div>
                        <div class="product-categories-menu">
                            <ul>
                                <li><a href="/nauchnye.php">Научные</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="product-style-tab">
                        <div class="product-tab-list">
                            <!-- Nav tabs -->
                            <ul class="tab-style" role="tablist">
                                <li>
                                <strong> ВЫБЕРИТЕ КНИГУ</strong>
                                </li>
                            </ul>
                        </div>





