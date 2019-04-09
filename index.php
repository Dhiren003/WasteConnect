<?php
if(!isset($_SESSION['sid'])){
    session_start();
    $_SESSION['sid']=session_id();
}
?>
<!DOCTYPE html>
<html>
<!-- Mirrored from glazeos.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Feb 2019 07:22:08 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Waste Connect</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="favicon/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="favicon/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="favicon/wc.png" sizes="16x16" />

    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta property="og:image" content="img/glaze-os-banner.png" />
    






    <link href="assets/nm2/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="assets/nm2/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/nm2/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="assets/nm2/swiper.css" rel="stylesheet" type="text/css" media="screen" />

    <link class="main-stylesheet" href="assets/nm2/glazeos.css" rel="stylesheet" type="text/css" />
    <link class="main-stylesheet" href="assets/nm2/glazeos-icons.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-41843260-3', 'auto');
        ga('send', 'pageview');
    </script>
    <script async src="../pagead2.googlesyndication.com/pagead/js/f.txt"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-5767150578326853",
            enable_page_level_ads: true
        });
    </script>
</head>

<body class="pace-dark">
<!--Header Page -->
    <?php include 'header.php';?>

    <div class="page-wrappers">

        <section class="jumbotron full-vh" data-pages="parallax">
            <div class="inner full-height">

                <div class="swiper-container" id="hero">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide fit">

                            <div class="slider-wrapper">
                                <div class="background-wrapper" data-swiper-parallax="30%">

                                    <div class="background" data-pages-bg-image="assets/images/background.jpg"></div>
                                </div>
                            </div>


                            <!-- <div class="content-layer">
                                <div class="inner full-height">
                                    <div class="container-xs-height full-height">
                                        <div class="col-xs-height col-middle text-right middle-right">
                                            <div class="container">
                                                <div class="middle-right">
                                                    <h1 class="light text-white m-t-5" data-swiper-parallax="-15%">Glaze OS.</h1>
                                                    <h4 class="light text-white sm-text-center">The Experience That All You Need.</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <section class="bg-master-lightest p-b-85 p-t-75">
            <div class="container">
                <div class="md-p-l-20 md-p-r-20 xs-no-padding">
                    <div class="row">
                        <h1 style="text-align:center; margin-left: 3px;"><b>Flow Of Our System</b></h1>
                        <div class="col-sm-5 col-md-4">
                            
                            <img src="img/cycle.png" height="400px" width="700px" style="margin-left: 253px;">
                        </div>
                        <div class="col-sm-7 col-md-8 no-padding xs-p-l-15 xs-p-r-15">
                            <div class="p-t-20 p-l-35 md-p-l-5 md-p-t-15">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-b-85 p-t-75 bg-master-lighter">
            <div class="container">
                <div class="md-p-l-20 xs-no-padding clearfix">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                             <img src="img/wet.gif" style="height: 200px; width: 300px">
                        </div>
                        <div class="col-md-7 col-md-offset-1  col-sm-offset-2 col-sm-6">
                            <div class="clearfix hidden-sm">
                                <br><br><br><h2 style="margin-left: 200px;">Organic Waste</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-master-lightest p-t-75 no-overflow">
            <div class="container">
                <div class="md-p-l-20 md-p-r-20 xs-no-padding">
                    <div class="row">
                        <div class="col-sm-5">
                            <br><br><br><h2 style="margin-left: 260px;">Our Presantation</h2>
                        </div>
                        <div class="col-sm-7 no-padding xs-p-l-15 xs-p-r-15">
                            <div class="content-mask-md">
                                <iframe src="https://player.vimeo.com/video/329320029" width="450" height="450" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section class="p-b-85 p-t-75 bg-master-lighter">
            <div class="container">
                <div class="md-p-l-20 xs-no-padding clearfix">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img src="img/caf.png">
                        </div>
                        <div class="col-md-7 col-md-offset-1  col-sm-offset-2 col-sm-6">
                            <div class="clearfix hidden-sm">
                                <h2>Enablement for Qualcomm MSM</h2>
                                <h5 class="m-b-20">The Android for MSM project allows users to build an Android based platform containing additional enhancements for Qualcomm chipsets. The platform uses Google's Android Linux implementation and tools.</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-master-lightest p-b-85 p-t-75 no-overflow">
            <div class="container">
                <div class="md-p-l-20 md-p-r-20 xs-no-padding">
                    <div class="row">
                        <div class="col-sm-5">
                            <h1 class="m-t-5 m-b-20">Substratum Theme Engine</h1>
                            <h5 class="m-b-20">Based on Sony's Overlay Manager Service (OMS). This is similar to Layers in terms of stability and customization as it runs off an upgraded version of the Resource Runtime Overlay system, with the added benefit of running up-to-date Sony code on a customized ROM.</h5>
                        </div>
                        <div class="col-sm-7 no-padding xs-p-l-15 xs-p-r-15">
                            <div class="content-mask-md">
                                <img src="img/oms.png" align="right">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
   <!--Footer Page -->
 <?php include 'footer.php'; ?>
        
       

    <script src="assets/nm/pace.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/nm/glazeos.image.loader.js"></script>
    <script type="text/javascript" src="assets/nm/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="assets/nm/bootstrap.min.js"></script>

    <script type="text/javascript" src="assets/nm/swiper.jquery.min.js"></script>
    <script type="text/javascript" src="assets/nm/velocity.min.js"></script>
    <script type="text/javascript" src="assets/nm/velocity.ui.js"></script>

    <script type="text/javascript" src="assets/nm/jquery.unveil.min.js"></script>

    <script type="text/javascript" src="assets/nm/glazeos.noelmacwan.js"></script>

    <script type="text/javascript" src="assets/nm/custom.js"></script>

  </body>


<!-- Mirrored from glazeos.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Feb 2019 07:23:15 GMT -->
</html>
