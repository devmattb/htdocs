<?php
  // PHP LIB
  require_once("../php/functions.php");
  $db = getDB(); // getDB connection on this page.
?>

<!DOCTYPE html>
<html>

<head>

  <!-- Title SEO -->
  <?php
    if ( isset($_GET["id"]) && $_GET["id"] != 0 ) {
      $query = 'SELECT * FROM projectPosts WHERE id="'.$_GET["id"].'"';
      $data = getContents($db, $query);
      $title = "";
      foreach($data as $row) {
        $title = $row["title"];
      }
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

  <!-- STANDARD INIT -->
  <script src="../js/init.js" type="text/javascript"></script>

  <script>
      $(document).ready(function(){
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

        include_once("../includes/nav.php");

        // Display Projects Page, Or Project Details Page?
        if (!isset($_GET["id"]) || $_GET["id"] == 0 ) {
          // Fetch all projects!
          $queryOngoing = "SELECT * FROM projectPosts WHERE ongoingProject=true ORDER BY createdAt DESC";
          $dataOngoing = getContents($db, $queryOngoing);

          $queryFinished = "SELECT * FROM projectPosts WHERE ongoingProject=false ORDER BY createdAt DESC";
          $dataFinished = getContents($db, $queryFinished);
          // Display Projects Page:
          echo '
            <!-- BKG IMG & OVERLAY -->
            <div class="bkgPageImg"><div class="bkgPageOverlay"></div></div>

            <!-- PROJECT HOLDER -->
            <div class="row projectRow">
            <div class="col s12 white-text">

                <!-- ONGOING -->
                <div class="col s12 row center">
                  <div class="col s12">
                      <!-- LARGE -->
                      <h1 class="hide-on-med-and-down">
                        ONGOING:
                      </h1>

                      <h1 style="font-size: 35px;" class="hide-on-large-only hide-on-small-only">
                        ONGOING:
                      </h1>

                      <!-- SMALL -->
                      <h1 style="font-size: 26px;" class="hide-on-med-and-up">
                        ONGOING:
                      </h1>
                  </div>
                      <div class="col s3"></div><!-- DUMMY -->
                      <div class="col s6 divider"></div>
                      <div class="col s3"></div><!-- DUMMY -->
                </div>
                ';
                $numReps = 0;

                foreach($dataOngoing as $row) {
                  if ($numReps == 0) {
                    echo '
                    <div class="row projectRow">
                    <div class="col s1"></div><!-- DUMMY -->
                    <div class="col s10 m10 center">

                      <!-- PROJECT ITEM #1 LARGE/MEDIUM -->
                      <div class="col l6 s12 hide-on-small-only">
                        <a href="?id='.$row["id"].'">
                            <div style="height:30vmin!important;" class="col s12 projectBox z-depth-4 orangeOpacity parallax-container">
                                <h3 class="center">
                                    '.$row["title"].'
                                </h3>
                                <div class="parallax">
                                    <img src="'.$row["projectCoverImgSrc"].'">
                                </div>
                            </div>
                        </a>
                      </div>

                      <!-- PROJECT ITEM #1 SMALL -->
                      <div class="col s12 hide-on-med-and-up">
                        <a href="?id='.$row["id"].'">
                            <div style="height: 40vmin!important;" class="col s12 projectBoxSmall z-depth-4 orangeOpacitySmall parallax-container">
                                <h3 class="smallHeader center">
                                    '.$row["title"].'
                                </h3>
                                <div class="parallax">
                                    <img src="'.$row["projectCoverImgSrc"].'">
                                </div>
                            </div>
                        </a>
                      </div>';
                    $numReps++; // Increment pairing
                  } else if ($numReps == 1) {
                    echo '
                      <!-- PROJECT ITEM #2 LARGE/MEDIUM -->
                      <div class="col l6 s12 hide-on-small-only">
                        <a href="?id='.$row["id"].'">
                          <div style="height:30vmin!important;" class="col s12 projectBox z-depth-4 orangeOpacity parallax-container">
                              <h3 class="center">
                                  '.$row["title"].'
                              </h3>
                              <div class="parallax">
                                  <img src="'.$row["projectCoverImgSrc"].'">
                              </div>
                          </div>
                        </a>
                      </div>

                      <!-- PROJECT ITEM #2 SMALL -->
                      <div class="col l6 s12 hide-on-med-and-up">
                        <a href="?id='.$row["id"].'">
                            <div style="height: 40vmin!important;" class="col s12 projectBoxSmall z-depth-4 orangeOpacitySmall parallax-container">
                                <h3 class="smallHeader center">
                                    '.$row["title"].'
                                </h3>
                                <div class="parallax">
                                    <img src="'.$row["projectCoverImgSrc"].'">
                                </div>
                            </div>
                        </a>
                      </div>
                    </div>
                    <div class="col s1"></div><!-- DUMMY -->
                  </div>'; // End LARGE/MED of project pair.
                    $numReps = 0; // Reset pairing
                  }
              } // end ONGOING foreach.

            echo '
              <div class="col s12 white-text">

              <!-- FINISHED -->
              <div class="col s12 row center">
                <div class="col s12">
                    <!-- LARGE -->
                    <h1 class="hide-on-med-and-down">
                      FINISHED:
                    </h1>

                    <h1 style="font-size: 35px;" class="hide-on-large-only hide-on-small-only">
                      FINISHED:
                    </h1>

                    <!-- SMALL -->
                    <h1 style="font-size: 26px;" class="hide-on-med-and-up">
                      FINISHED:
                    </h1>
                </div>
                    <div class="col s3"></div><!-- DUMMY -->
                    <div class="col s6 divider"></div>
                    <div class="col s3"></div><!-- DUMMY -->
              </div>
              ';
              $numReps = 0;
              foreach($dataFinished as $row) {
                if ($numReps == 0) {
                  echo '
                  <div class="row projectRow">
                  <div class="col s1"></div><!-- DUMMY -->
                  <div class="col s10 m10 center">

                    <!-- PROJECT ITEM #1 LARGE/MEDIUM -->
                    <div class="col l6 s12 hide-on-small-only">
                      <a href="?id='.$row["id"].'">
                          <div style="height:30vmin!important;" class="col s12 projectBox z-depth-4 orangeOpacity parallax-container">
                              <h3 class="center">
                                  '.$row["title"].'
                              </h3>
                              <div class="parallax">
                                  <img src="'.$row["projectCoverImgSrc"].'">
                              </div>
                          </div>
                      </a>
                    </div>

                    <!-- PROJECT ITEM #1 SMALL -->
                    <div class="col s12 hide-on-med-and-up">
                      <a href="?id='.$row["id"].'">
                          <div style="height: 40vmin!important;" class="col s12 projectBoxSmall z-depth-4 orangeOpacitySmall parallax-container">
                              <h3 class="smallHeader center">
                                  '.$row["title"].'
                              </h3>
                              <div class="parallax">
                                  <img src="'.$row["projectCoverImgSrc"].'">
                              </div>
                          </div>
                      </a>
                    </div>';
                  $numReps++; // Increment pairing
                } else if ($numReps == 1) {
                  echo '
                    <!-- PROJECT ITEM #2 LARGE/MEDIUM -->
                    <div class="col l6 s12 hide-on-small-only">
                      <a href="?id='.$row["id"].'">
                        <div style="height:30vmin!important;" class="col s12 projectBox z-depth-4 orangeOpacity parallax-container">
                            <h3 class="center">
                                '.$row["title"].'
                            </h3>
                            <div class="parallax">
                                <img src="'.$row["projectCoverImgSrc"].'">
                            </div>
                        </div>
                      </a>
                    </div>

                    <!-- PROJECT ITEM #2 SMALL -->
                    <div class="col l6 s12 hide-on-med-and-up">
                      <a href="?id='.$row["id"].'">
                          <div style="height: 40vmin!important;" class="col s12 projectBoxSmall z-depth-4 orangeOpacitySmall parallax-container">
                              <h3 class="smallHeader center">
                                  '.$row["title"].'
                              </h3>
                              <div class="parallax">
                                  <img src="'.$row["projectCoverImgSrc"].'">
                              </div>
                          </div>
                      </a>
                    </div>
                  </div>
                  <div class="col s1"></div><!-- DUMMY -->
                </div>'; // End LARGE/MED of project pair.
                  $numReps = 0; // Reset pairing
                }
            } // end ONGOING foreach.
          echo '
            </div>
          '; // End PROJECT BROWSE div.
        } else {
          // Fetch only one project! $data is fetched in head, before <title>!
          foreach($data as $row) {
            $numVids = 0;
            $title = $row["title"];
            $subtitle = $row["subtitle"];
            $whatText = $row["whatText"];
            $whyText = $row["whyText"];
            $howText = $row["howText"];
            $projectCoverImgSrc = $row["projectCoverImgSrc"];
            $createdBy = $row["createdBy"];
            $createdAt = $row["createdAt"];
            $ongoingProject = $row["ongoingProject"];

            // If videos exist, get them too!
            if (isset($row["videoLink1"])) {
              $videoTitle1 = $row["videoTitle1"];
              $videoCoverImg1 = $row["videoCoverImg1"];
              $videoLink1 = $row["videoLink1"];
              $numVids++;
            }

            if (isset($row["videoLink2"])) {
              $videoTitle2 = $row["videoTitle2"];
              $videoCoverImg2 = $row["videoCoverImg2"];
              $videoLink2 = $row["videoLink2"];
              $numVids++;
            }

            if (isset($row["videoLink3"])) {
              $videoTitle3 = $row["videoTitle3"];
              $videoCoverImg3 = $row["videoCoverImg3"];
              $videoLink3 = $row["videoLink3"];
              $numVids++;
            }
          }
          // Display project info:
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
                            <i class="projectCategoryIcon far fa-lightbulb"></i>
                            <h3>WHAT</h3>
                        </div>

                        <!-- SMALL -->
                        <div class="hide-on-med-and-up">
                            <i class="projectCategoryIconSmall far fa-lightbulb"></i>
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
                            <i class="projectCategoryIcon far fa-question-circle"></i>
                            <h3>WHY</h3>
                        </div>

                        <div class="hide-on-med-and-up">
                            <i class="projectCategoryIconSmall far fa-question-circle"></i>
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
                            <i class="projectCategoryIcon fas fa-code"></i>
                            <h3>HOW</h3>
                        </div>

                        <!-- SMALL -->
                        <div class="hide-on-med-and-up">
                            <i class="projectCategoryIconSmall fas fa-code"></i>
                            <h3 class="smallHeader">HOW</h3>
                        </div>

                        <div class="col s10 offset-s1">

                            <p class="flow-text">
                                '.$howText.'
                            </p>

                        </div>

                    </div>


                    <div style="position: relative; top: 20px;" class="col s12 row">
                    ';

                    if ($numVids != 0) {
                      echo '
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
                        ';
                      }

                        echo '
                        <div style="position:relative; top: 20px; left: 30px;" class="col s10 m11 l11 left">
                            <div class="col l12 s12 row center hide-on-small-only">';
                              // Create Project Footer:
                              if ($numVids != 0) {
                                for($i = 0; $i < $numVids; $i++ ) {
                                  $vidLink = "";
                                  $vidTitle = "";
                                  $vidImgSrc = "";
                                  if ($i == 0) {
                                    $vidLink = $videoLink1;
                                    $vidTitle = $videoTitle1;
                                    $vidImgSrc = $videoCoverImg1;
                                  } else if ($i == 1) {
                                    $vidLink = $videoLink2;
                                    $vidTitle = $videoTitle2;
                                    $vidImgSrc = $videoCoverImg2;
                                  } else if ($i == 2) {
                                    $vidLink = $videoLink3;
                                    $vidTitle = $videoTitle3;
                                    $vidImgSrc = $videoCoverImg3;
                                  }
                                  echo '
                                      <!-- LARGE/MEDIUM -->
                                      <a target="_blank" href="'.$vidLink.'">

                                          <div style="height: 230px width: 120%;" class="col m12 l3 projectBox z-depth-4 orangeOpacity parallax-container">
                                              <h3 style="top: 10vmin; font-size: 3.5vmin;" class="center">
                                                  '.$vidTitle.'
                                              </h3>
                                              <div class="parallax">
                                                  <img src="'.$vidImgSrc.'">
                                              </div>
                                          </div>
                                      </a>';
                                  } // End of for-loop
                                  echo '
                                    </div>
                                    <div class="col s1 hide-on-small-only"></div><!-- DUMMY -->
                                    <div class="col s12 center hide-on-med-and-up">
                                  ';
                                  for($i = 0; $i < $numVids; $i++ ) {
                                    if ($i == 0) {
                                      $vidLink = $videoLink1;
                                      $vidTitle = $videoTitle1;
                                      $vidImgSrc = $videoCoverImg1;
                                    } else if ($i == 1) {
                                      $vidLink = $videoLink2;
                                      $vidTitle = $videoTitle2;
                                      $vidImgSrc = $videoCoverImg2;
                                    } else if ($i == 2) {
                                      $vidLink = $videoLink3;
                                      $vidTitle = $videoTitle3;
                                      $vidImgSrc = $videoCoverImg3;
                                    }
                                    echo '
                                        <a target="_blank" href="'.$vidLink.'">
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
                                  } // End of for-loop
                                  echo '</div>';
                              }

         // Echo closing tags...
         echo '
                        </div>
                    </div>
              </div>
              <div style="margin-top: 30px;" class="col s12 center">
                <a href="?id=0">
                  <button class="btn-large webOrange white-text waves-light waves-effect">
                    BROWSE ALL PROJECTS
                  </button>
                </a>
                </div>
              </div>
          </div>
          ';

        } // end of ELSE statement.
    ?>
</body>
</html>
