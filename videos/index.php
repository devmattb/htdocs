<!DOCTYPE html>
<html>

<head>

  <!-- Title SEO -->
  <title>devmattb - Videos</title>
  <meta itemprop="name" content="devmattb - Videos">
  <meta property="og:title" content="devmattb - Videos">
  <meta name="twitter:title" content="devmattb - Videos">

  <!-- STANDARD HEADER -->
  <?php include("../includes/header.html") ?>

  <!-- DEVMATTB CSS -->
  <link type="text/css" rel="stylesheet" href="../css/stylesheet.css">

  <!-- STANDARD INIT -->
  <script src="../js/init.js" type="text/javascript"></script>

  <script>

      $(document).ready(function(){
        window.setTimeout(function(){$(".scale-transition").removeClass("scale-out");},200);
        // Init
        $("#videoNavItem").css("border-bottom", "2px solid #F93822");
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
  <?php include_once("../includes/nav.php"); ?>

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
        <div class="scale-transition scale-out">
        <a target="_blank" href="https://www.youtube.com/watch?v=gGQkJgs3py0&list=PLwmkNMsjdPSy_gvrmvATntoAys-5q7NaP&index=1">
            <div class="col s10 l5 projectBox z-depth-4 orangeOpacity parallax-container">
                <h3 style="top: 45px;" class="center">
                    HOW TO KNOW WHAT YOU WANT
                </h3>
                <div class="parallax">
                    <img src="../img/videos/vid1.jpg">
                </div>
            </div>
        </a>
      </div>

        <!-- PROJECT ITEM #2 LARGE/MEDIUM -->
        <div class="scale-transition scale-out">
        <a target="_blank" href="https://www.youtube.com/watch?v=qfeb5Oxp2IY&list=PLwmkNMsjdPSy_gvrmvATntoAys-5q7NaP&index=4">
            <div class="col s10 l5 projectBox z-depth-4 orangeOpacity parallax-container">
                <h3 style="top: 45px;" class="center">
                    HOW TO GET WHAT YOU WANT
                </h3>
                <div class="parallax">
                    <img src="../img/videos/vid2.jpg">
                </div>
            </div>
        </a>
      </div>
      </div>

      <div class="col s1 hide-on-small-only"></div><!-- DUMMY -->

      <div class="col s12 row center hide-on-med-and-up">

        <!-- PROJECT ITEM #1 SMALL -->
        <div class="scale-transition scale-out">
        <a target="_blank" href="https://www.youtube.com/watch?v=gGQkJgs3py0&list=PLwmkNMsjdPSy_gvrmvATntoAys-5q7NaP&index=1">
            <div style="height: 250px" class="col s12 projectBoxSmall orangeOpacitySmall z-depth-4 parallax-container">
                <h3 style="top: 70px;" class="center">
                    HOW TO KNOW WHAT YOU WANT
                </h3>
                <div class="parallax">
                    <img src="../img/videos/vid1.jpg">
                </div>
            </div>
        </a>
      </div>

        <!-- PROJECT ITEM #2 SMALL -->
        <div class="scale-transition scale-out">
        <a target="_blank" href="https://www.youtube.com/watch?v=qfeb5Oxp2IY&list=PLwmkNMsjdPSy_gvrmvATntoAys-5q7NaP&index=4">
            <div style="height: 250px" class="col s12 projectBoxSmall orangeOpacitySmall z-depth-4 parallax-container">
                <h3 style="top: 70px;" class="center">
                    HOW TO GET WHAT YOU WANT
                </h3>
                <div class="parallax">
                    <img src="../img/videos/vid2.jpg">
                </div>
            </div>
        </a>
      </div>

      </div>

       <div class="col s12 center">
        <h5 style="margin-bottom: 30px;">Want to see more? Check out my "Most Watched" playlist:</h5>
        <a target="_blank" href="https://www.youtube.com/channel/UCNmXzVXkobH69xQPgTX-qGA/videos?view=0&shelf_id=3&view_as=subscriber&sort=p"><button class="btn-large webOrange">CHECK IT!</button></a>
      </div>

  </div>

</body>


</html>
