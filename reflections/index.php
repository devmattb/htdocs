<!DOCTYPE html>
<html>

<head>

  <!-- Title SEO -->
  <title>devmattb - Reflections</title>
  <meta itemprop="name" content="devmattb - Reflections">
  <meta property="og:title" content="devmattb - Reflections">
  <meta name="twitter:title" content="devmattb - Reflections">

  <!-- STANDARD HEADER -->
  <?php include("../includes/header.html") ?>

  <!-- DEVMATTB CSS -->
  <link type="text/css" rel="stylesheet" href="../css/stylesheet.css">

  <script>

      $(document).ready(function(){

        // Init
        $(".button-collapse").sideNav();
        $(".parallax").parallax();
        $(".modal").modal();
        $(".button-collapse").sideNav({'closeOnClick' : true});
        $("#reflectionNavItem").css("border-bottom", "2px solid #F93822");
        $(".projectBox").hover(
          function() {
            $(this).children("h3").addClass("hidden");
          }, function() {
            $(this).children("h3").removeClass("hidden");
          });

      });

  </script>

</head>

<body>

    <?php

        include("../includes/modals.html");
        include("../includes/nav.html");

    ?>
  <!-- BKG IMG & OVERLAY -->
  <div class="bkgPageImg"><div class="bkgPageOverlay"></div></div>

  <!-- PROJECT HOLDER -->
  <div class="col s12 row white-text">

      <div class="col s12 row">
        <div class="col s12">

            <!-- LARGE -->
            <h1 class="center hide-on-med-and-down">
              POPULAR:
            </h1>

            <h1 style="font-size: 35px;" class="center hide-on-large-only hide-on-small-only">
              POPULAR:
            </h1>

            <!-- SMALL -->
            <h1 style="font-size: 26px;" class="center hide-on-med-and-up">
              POPULAR:
            </h1>

        </div>
          <div class="col s3"></div><!-- DUMMY -->
          <div class="col s6 divider">
          </div>
          <div class="col s3"></div><!-- DUMMY -->
      </div>


      <div class="col s2 hide-on-small-only"></div><!-- DUMMY -->
      <div class="col s9 row center hide-on-small-only">

        <!-- PROJECT ITEM #1 LARGE/MEDIUM -->
        <a target="_blank" href="https://www.youtube.com/watch?v=gGQkJgs3py0&list=PLwmkNMsjdPSy_gvrmvATntoAys-5q7NaP&index=1">
            <div class="col s10 l5 projectBox z-depth-4 orangeOpacity parallax-container">
                <h3 style="top: 45px;" class="center">
                    HOW TO KNOW WHAT YOU WANT
                </h3>
                <div class="parallax">
                    <img src="../img/reflections/vid1.jpg">
                </div>
            </div>
        </a>

        <!-- PROJECT ITEM #2 LARGE/MEDIUM -->
        <a target="_blank" href="https://www.youtube.com/watch?v=qfeb5Oxp2IY&list=PLwmkNMsjdPSy_gvrmvATntoAys-5q7NaP&index=4">
            <div class="col s10 l5 projectBox z-depth-4 orangeOpacity parallax-container">
                <h3 style="top: 45px;" class="center">
                    HOW TO GET WHAT YOU WANT
                </h3>
                <div class="parallax">
                    <img src="../img/reflections/vid2.jpg">
                </div>
            </div>
        </a>
      </div>

      <div class="col s1 hide-on-small-only"></div><!-- DUMMY -->

      <div class="col s12 row center hide-on-med-and-up">

        <!-- PROJECT ITEM #1 SMALL -->
        <a target="_blank" href="https://www.youtube.com/watch?v=gGQkJgs3py0&list=PLwmkNMsjdPSy_gvrmvATntoAys-5q7NaP&index=1">
            <div style="height: 250px" class="col s12 projectBoxSmall orangeOpacitySmall z-depth-4 parallax-container">
                <h3 style="top: 70px;" class="center">
                    HOW TO KNOW WHAT YOU WANT
                </h3>
                <div class="parallax">
                    <img src="../img/reflections/vid1.jpg">
                </div>
            </div>
        </a>

        <!-- PROJECT ITEM #2 SMALL -->
        <a target="_blank" href="https://www.youtube.com/watch?v=qfeb5Oxp2IY&list=PLwmkNMsjdPSy_gvrmvATntoAys-5q7NaP&index=4">
            <div style="height: 250px" class="col s12 projectBoxSmall orangeOpacitySmall z-depth-4 parallax-container">
                <h3 style="top: 70px;" class="center">
                    HOW TO GET WHAT YOU WANT
                </h3>
                <div class="parallax">
                    <img src="../img/reflections/vid2.jpg">
                </div>
            </div>
        </a>

      </div>

       <div class="col s12 center">
        <h5 style="margin-bottom: 30px;">Want to see more? Check out my "Reflections" playlist:</h5>
        <a target="_blank" href="https://www.youtube.com/watch?v=gGQkJgs3py0&list=PLwmkNMsjdPSy_gvrmvATntoAys-5q7NaP"><button class="btn-large webOrange">CHECK IT!</button></a>
      </div>

  </div>

</body>


</html>
