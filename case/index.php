<?php
  // PHP Lib
  require_once("../php/functions.php");
  $db = getDB();
  $query = "";
  // Fetch only one case, or all of them?
  if (isset($_GET["id"])) {
    $query = "SELECT * FROM casePosts WHERE id=".$_GET["id"];
  } else {
    $query = "SELECT * FROM casePosts ORDER BY createdAt DESC";
  }

  $data =  getContents($db, $query);

?>
<!DOCTYPE html>
<html>

<head>
  <!-- MAKE SURE WE DONT LOSE PAGE RANK TO ANY OF THE LINKS ON THIS PAGE! -->
  <meta name="robots" content="nofollow" />

  <!-- Title SEO -->
  <title>devmattb - Case</title>
  <meta itemprop="name" content="devmattb - Case">
  <meta property="og:title" content="devmattb - Case">
  <meta name="twitter:title" content="devmattb - Case">

  <!-- STANDARD HEADER -->
  <?php include("../includes/header.html") ?>

  <!-- DEVMATTB CSS -->
  <link type="text/css" rel="stylesheet" href="../css/stylesheet.css">

  <!-- STANDARD INIT -->
  <script src="../js/init.js" type="text/javascript"></script>

  <script>

      $(document).ready(function(){
        // Init
        window.setTimeout(function(){$(".scale-transition").removeClass("scale-out");},200);
        $("#caseNavItem").css("border-bottom", "2px solid #F93822");
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
  <div class="col s12 row grey-text text-darken-4">

      <div class="col s12 row">
        <div class="col s12 white-text">

            <!-- LARGE -->
            <h1 class="center hide-on-med-and-down">
              CASE:
            </h1>

            <h1 style="font-size: 35px;" class="center hide-on-large-only hide-on-small-only">
              CASE:
            </h1>

            <!-- SMALL -->
            <h1 style="font-size: 26px;" class="center hide-on-med-and-up">
              CASE:
            </h1>

        </div>
          <div class="col s3"></div><!-- DUMMY -->
          <div class="col s6 divider">
          </div>
          <div class="col s3"></div><!-- DUMMY -->
      </div>

      <div class="row col s12">

        <?php if (count($data) == 0 ) { echo '<div class="col s12 center white-text"><h4 style="margin-top: 50px;"> No cases have been added yet. </h4></div>'; } ?>
        <?php
          foreach($data as $row) {
            $imgSrc = $row["imgSrc"];
            $title = $row["caseTitle"];
            $text = $row["caseText"];
            $demoLink = $row["demoLink"];
            $timestamp = $row["createdAt"];
        ?>

        <div class="col s10 offset-s1 blogPost scale-transition scale-out">

          <!-- LARGE -->
          <div class="card horizontal hide-on-med-and-down">
            <div class="card-image">
              <img src="<?php echo $imgSrc; ?>">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <span class="card-title webTextOrange"><b><?php echo $title ?></b></span>
                <p><?php echo $text?></p>
              </div>
              <?php
                  if (isset($demoLink)) {
                      echo '
                      <div class="card-action">
                        <a target="_blank" rel="nofollow" href="'.$demoLink.'"><button class="btn webOrange waves-effect waves-light">VIEW RESULT!</button></a>
                        <span style="margin-top:8px;" class="right"> <i class="far fa-calendar webTextOrange"></i>&nbsp;&nbsp; <span class="grey-text text-darken-1">'.$timestamp.'</span> </span>
                      </div>
                      ';
                  }
               ?>
            </div>
          </div>

          <!-- MED/SMALL -->
          <div class="card hide-on-large-only">
            <div class="card-image">
              <img src="<?php echo $imgSrc; ?>">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <span class="card-title"><b><?php echo $title ?></b></span>
                <p><?php echo $text?></p>
              </div>
              <?php
                if ( isset($demoLink)) {
                    echo '
                    <div class="card-action">
                      <a target="_blank" rel="nofollow" href="'.$demoLink.'"><button class="btn webOrange waves-effect waves-light">VIEW RESULT!</button></a>
                      <span style="margin-top:5px;" class="right hide-on-small-only"> <i class="far fa-calendar webTextOrange"></i>&nbsp;&nbsp; <span class="grey-text text-darken-1">'.$timestamp.'</span> </span>
                    </div>
                    ';
                }
              ?>
            </div>
          </div>
        </div>
        <?php } // end of foreach ?>
      </div>
  </div>

</body>

</html>
