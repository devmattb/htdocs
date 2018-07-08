<!DOCTYPE html>
<html>

<head>
  <!-- Title SEO -->
  <title>devmattb - Projects</title>
  <meta itemprop="name" content="devmattb - Projects">
  <meta property="og:title" content="devmattb - Projects">
  <meta name="twitter:title" content="devmattb - Projects">

  <!-- STANDARD HEADER -->
  <?php include("../includes/header.html") ?>

  <!-- DEVMATTB CSS -->
  <link type="text/css" rel="stylesheet" href="../css/stylesheet.css">

  <script>

      $(document).ready(function(){

        // Init
        $(".button-collapse").sideNav({'closeOnClick' : true});
        $(".parallax").parallax();
        $(".modal").modal();
        $("#projectNavItem").css("border-bottom", "2px solid #F93822");
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

      <!-- ONGOING -->
      <div class="col s12 row">
        <div class="col s12">

            <!-- LARGE -->
            <h1 class="center hide-on-med-and-down">
              ONGOING:
            </h1>

            <h1 style="font-size: 35px;" class="center hide-on-large-only hide-on-small-only">
              ONGOING:
            </h1>

            <!-- SMALL -->
            <h1 style="font-size: 26px;" class="center hide-on-med-and-up">
              ONGOING:
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
        <a href="indoor-navigation/">

            <div class="col s10 l5 projectBox z-depth-4 orangeOpacity parallax-container">
                <h3 style="top: 50px;" class="center">
                    INDOOR NAVIGATION (AR/AI)
                </h3>
                <div class="parallax">
                    <img src="../img/indoor_navigation/thumbnail2.png">
                </div>
            </div>
        </a>

        <!-- PROJECT ITEM #2 LARGE/MEDIUM -->
        <a href="study-app/">
            <div class="col s10 l5 projectBox z-depth-4 orangeOpacity parallax-container">
                <h3 class="center">
                    STUDY APP
                </h3>
                <div class="parallax">
                    <img src="../img/study_app/signup_1.png">
                </div>
            </div>
        </a>

      </div>
      <div class="col s1 hide-on-small-only"></div><!-- DUMMY -->

      <div class="col s12 row center hide-on-med-and-up">

      <a href="indoor-navigation/">
        <!-- PROJECT ITEM #1 SMALL -->
        <div style="height: 250px" class="col s12 projectBoxSmall z-depth-4 orangeOpacitySmall parallax-container">
            <h3 style="top: 80px;" class="center">
                INDOOR NAVIGATION (AR/AI)
            </h3>
            <div class="parallax">
                <img src="../img/indoor_navigation/thumbnail2.png">
            </div>
        </div>
      </a>

        <!-- PROJECT ITEM #2 SMALL -->
        <a href="study-app/">
            <div style="height: 250px" class="col s12 projectBoxSmall z-depth-4 orangeOpacitySmall parallax-container">
                <h3 style="top: 80px;" class="center">
                    STUDY APP
                </h3>
                <div class="parallax">
                    <img src="../img/study_app/signup_1.png">
                </div>
            </div>
        </a>


      </div>

      <!-- FINISHED -->

      <div class="col s12 row">
        <div class="col s12">

            <!-- LARGE -->
            <h1 class="center hide-on-med-and-down">
              FINISHED:
            </h1>

            <h1 style="font-size: 35px;" class="center hide-on-large-only hide-on-small-only">
              FINISHED:
            </h1>

            <!-- SMALL -->
            <h1 style="font-size: 26px;" class="center hide-on-med-and-up">
              FINISHED:
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
        <a href="chipkit-tetris/">

            <div class="col s10 l5 projectBox z-depth-4 orangeOpacity parallax-container">
                <h3 class="center">
                    CHIPKIT TETRIS
                </h3>
                <div class="parallax">
                    <img src="../img/chipkit_tetris/chip_2.png">
                </div>
            </div>
        </a>

        <!-- PROJECT ITEM #2 LARGE/MEDIUM -->
        <a href="crm/">
            <div class="col s10 l5 projectBox z-depth-4 orangeOpacity parallax-container">
                <h3 class="center">
                    CRM
                </h3>
                <div class="parallax">
                    <img src="../img/crm/crm_bkg.jpg">
                </div>
            </div>
        </a>

      </div>
      <div class="col s1 hide-on-small-only"></div><!-- DUMMY -->

      <div class="col s12 row center hide-on-med-and-up">

      <a href="chipkit-tetris/">
        <!-- PROJECT ITEM #1 SMALL -->
        <div style="height: 250px" class="col s12 projectBoxSmall z-depth-4 orangeOpacitySmall parallax-container">
            <h3 style="top: 80px;" class="center">
                CHIPKIT TETRIS
            </h3>
            <div class="parallax">
                <img src="../img/chipkit_tetris/chip_2.png">
            </div>
        </div>
      </a>

        <!-- PROJECT ITEM #2 SMALL -->
        <a href="crm/">
            <div style="height: 250px" class="col s12 projectBoxSmall z-depth-4 orangeOpacitySmall parallax-container">
                <h3 style="top: 80px;" class="center">
                    CRM
                </h3>
                <div class="parallax">
                    <img src="../img/crm/crm_bkg.jpg">
                </div>
            </div>
        </a>


      </div>

  </div>

</body>


</html>
