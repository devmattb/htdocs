<!DOCTYPE html>
<html>

<head>

  <!-- Title SEO -->
  <?php
    if (!isset($_GET["id"]) || $_GET["id"] != 0 )) {
      echo '
        <title>devmattb - '.$title.'</title>
        <meta itemprop="name" content="devmattb - '.$title.'">
        <meta property="og:title" content="devmattb - '.$title.'">
        <meta name="twitter:title" content="devmattb - '.$title.'">
      ';
    } else {

      echo '
        <title>devmattb - Projects</title>
        <meta itemprop="name" content="devmattb - Projects">
        <meta property="og:title" content="devmattb - Projects">
        <meta name="twitter:title" content="devmattb - Projects">
      ';
    }
  ?>

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
        $(".brand-logo").attr("src", "logo_white_transparent.png");

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

        // Display Projects Page, Or Project Details Page?
        if (!isset($_GET["id"]) || $_GET["id"] != 0 )) {
          // Display Projects Page:
          echo '
            <!-- BKG IMG & OVERLAY -->
            <div class="bkgPageImg"><div class="bkgPageOverlay"></div></div>

            <!-- PROJECT HOLDER -->
            <div class="col s12 row white-text">

                <!-- ONGOING -->
                <div class="col s12 row">
                ';
                for($j = 0; $j < $countOngoing; $j++) {
                  echo '
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

                  <!-- PROJECT ITEM LARGE/MEDIUM -->
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

                  <!-- PROJECT ITEM SMALL -->
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

                </div>';

                echo '
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
                ';

              for($k = 0; $k < $countFinished; $k++) {
                echo '
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

                </div>';
              }
          echo '
            </div>
          '; // End FINISHED div.
        } else {
          echo '
          <!-- PROJECT HOLDER -->
          <div class="col s12 row">

              <div class="col s12 row">
                <div class="col s12">

                    <!-- LARGE -->
                    <h1 class="center hide-on-med-and-down">
                      '.$title.'
                    </h1>

                    <h1 style="font-size: 35px;" class="center hide-on-large-only hide-on-small-only">
                      '.$title.'
                    </h1>

                    <!-- SMALL -->
                    <h1 style="font-size: 26px;" class="center hide-on-med-and-up">
                      '.$title.'
                    </h1>

                </div>
                  <div class="col s3"></div><!-- DUMMY -->
                  <div class="col s6 divider">
                  </div>
                  <div class="col s3"></div><!-- DUMMY -->
              </div>


              <div style="position:relative; top: -15px;" class="col s12 row center">
                <h5 class="center hide-on-small-only">'.$subtitle.'</h5>
                <h5 style="font-size:18px;" class="center hide-on-med-and-up">'.$subtitle.'</h5>
              </div>

              <div class="col s12 row center">

                    <!-- IDEA, WHY, HOW? -->
                    <div class="col s12 l4 row center projectCategory">

                        <!-- LARGE -->
                        <div class="hide-on-small-only">
                            <i class="projectCategoryIcon fa fa-lightbulb-o"></i>
                            <h3>WHAT</h3>
                        </div>

                        <!-- SMALL -->
                        <div class="hide-on-med-and-up">
                            <i class="projectCategoryIconSmall fa fa-lightbulb-o"></i>
                            <h3 class="smallHeader">WHAT</h3>

                        </div>

                        <div class="col s10 offset-s1">

                            <p class="flow-text">
                                '.$whatText.'
                            </p>

                        </div>

                    </div>

                    <!-- IDEA, WHY, HOW? -->
                    <div class="col s12 l4 row center projectCategory">

                        <!-- LARGE -->
                        <div class="hide-on-small-only">
                            <i class="projectCategoryIcon fa fa-question-circle-o"></i>
                            <h3>WHY</h3>
                        </div>

                        <div class="hide-on-med-and-up">
                            <i class="projectCategoryIconSmall fa fa-question-circle-o"></i>
                            <h3 class="smallHeader">WHY</h3>

                        </div>

                        <!-- SMALL -->
                        <div class="col s10 offset-s1">

                            <p class="flow-text">
                                '.$whyText.'
                            </p>

                        </div>

                    </div>

                    <!-- IDEA, WHY, HOW? -->
                    <div class="col s12 l4 row center projectCategory">

                        <!-- LARGE -->
                        <div class="hide-on-small-only">
                            <i class="projectCategoryIcon fa fa-code"></i>
                            <h3>HOW</h3>
                        </div>

                        <!-- SMALL -->
                        <div class="hide-on-med-and-up">
                            <i class="projectCategoryIconSmall fa fa-code"></i>
                            <h3 class="smallHeader">HOW</h3>

                        </div>

                        <div class="col s10 offset-s1">

                            <p class="flow-text">
                                '.$howText.'
                            </p>

                        </div>

                    </div>


                    <div style="position: relative; top: 20px;" class="col s12 row">

                        <div class="col s12">

                          <!-- LARGE -->
                          <h3 style="margin-left: 30px;" class="left hide-on-small-only">
                              VIDEOS RELATED TO THIS CONTENT:
                              <div style="margin-left: 30px; margin-top: 10px;" class="col l11 m11 offset-m1 divider"></div>
                          </h3>

                          <!-- SMALL -->
                          <h3 style="margin-left: 30px;" class="smallSubHeader center hide-on-med-and-up">
                              VIDEOS RELATED TO THIS CONTENT:
                              <div style="margin-left: 6vmin; margin-top: 10px;" class="s9 offset-s2 divider"></div>
                          </h3>

                        </div>

                        <div style="position:relative; top: 20px; left: 30px;" class="col s11 left">';
                              // Create Project Footer:
                              if ($numVids == 0) {
                                echo '<p>No videos have been published yet.</p>';
                              } else {
                                foreach($i = 0; $i < $numVids; $i++ ) {
                                  $vidLink = "";
                                  $vidTitle = "";
                                  $vidImgSrc = "";
                                  if ($i == 1) {
                                    $vidLink = $link1;
                                    $vidTitle = $title1;
                                    $vidImgSrc = $imgSrc1;
                                  } else if ($i == 2) {
                                    $vidLink = $link2;
                                    $vidTitle = $title2;
                                    $vidImgSrc = $imgSrc1;
                                  } else if ($i == 3) {
                                    $vidLink = $link3;
                                    $vidTitle = $title3;
                                    $vidImgSrc = $imgSrc1;
                                  }
                                  echo '
                                  <div class="col l12 m8 s12 row center hide-on-small-only">

                                      <!-- LARGE/MEDIUM -->
                                      <a target="_blank" href="'.$vidLink.'">

                                          <div style="height: 230px" class="col m12 l4 projectBox z-depth-4 orangeOpacity parallax-container">
                                              <h3 style="top: 30%;" class="center">
                                                  '.$vidTitle.'
                                              </h3>
                                              <div class="parallax">
                                                  <img src="'.$vidImgSrc.'">
                                              </div>
                                          </div>
                                      </a>

                                    </div>
                                    <div class="col s1 hide-on-small-only"></div><!-- DUMMY -->

                                    <div class="col s6 row pull-s1 center hide-on-med-and-up">

                                        <a target="_blank" href="'.$vidLink.'">
                                          <!-- PROJECT ITEM #1 SMALL -->
                                          <div style="height: 100px" class="col s12 projectBoxSmall z-depth-4 parallax-container">

                                              <h3 style="top: 22px; font-size: 14px;" class="center">
                                                  '.$vidTitle.'
                                              </h3>
                                              <div class="parallax">
                                                  <img src="'.$vidImgSrc.'">
                                              </div>
                                          </div>
                                        </a>

                                  ';
                                } // End of foreach.
                              }

        // Echo rest.
         echo '
                            </div>
                        </div>
                    </div>
              </div>
          </div>;
          ';

        }
    ?>
</body>
</html>
