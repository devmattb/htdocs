<!-- Authentication -->
<?php require_once("../../php/authenticate.php") ?>

<!-- ADMIN ONLY PAGE! Extra Authentication -->
<?php require_once("../../php/authenticate-admin-only.php") ?>

<!-- PHP Lib -->
<?php require_once("../../php/functions.php"); ?>

<!-- NYTT INLÄGG SIDA-->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <!-- Title SEO -->
  <title>IT Expert | Devmattb - Admin - Delete Project Post</title>

  <!-- Establish DB Connection: -->
  <?php $db = getDB(); ?>
  <!-- HEADER -->
  <?php require_once("../../includes/header.html") ?>

  <!-- CSS -->
  <link type="text/css" rel="stylesheet" href="../../css/stylesheet.css"/>
  <link type="text/css" rel="stylesheet" href="../../css/slider.css" />

  <!-- JS -->
  <script src="../../js/init.js" type="text/javascript"></script>

  <!-- Error Handling visualization -->
  <?php include("../../php/errors.php"); ?>
</head>

<body>

  <!-- Page Content -->
  <main>
    <div class="row">
      <div class="col s12">
      <br/><br/><br/><br/>
      <div class="col s10 offset-s1">
        <h4> Delete Project Posts </h4>
        <ul class="collapsible">
          <?php
            $query = 'SELECT * FROM projectPosts ORDER BY id DESC';
            $data = getContents($db, $query);
            foreach($data as $row) {
              $id = $row["id"];
              $imgSrc = $row["projectCoverImgSrc"];
              $title = $row["title"];
              $text = $row["whatText"];
              $author = $row["createdBy"];
              $timestamp = $row["createdAt"];
          ?>
            <li class="hoverable tooltipped" data-position="bottom" data-tooltip="Click for detailed info!">
              <div class="collapsible-header">
                <div class="col s12">
                  <?php echo $title ?>
                </div>
                <?php
                  // Get numVids...
                  $numVids = 0;
                  if (isset($row["videoLink1"])) {
                    $numVids++;
                  }
                  if (isset($row["videoLink2"])) {
                    $numVids++;
                  }
                  if (isset($row["videoLink3"])) {
                    $numVids++;
                  }

                  if ( !isset($row["videoLink3"]) ) {
                    echo '
                    <form class="col s12 offset-l8 offset-m4 offset-s2 right" action="../add-video-to-project-post/?id='.$id.'&numVids='.$numVids.'" method="post" enctype="multipart/form-data" >
                      <button type="submit" style="margin-top: 0px;" class="right btn waves-effect waves-light green hoverable">
                        VIDEO+
                      </button>
                    </form>
                    ';
                  }
                ?>
                <form class="col s12" action="<?php echo '../../php/delete-project-post.php?id='.$id.'&imgSrc='.$imgSrc?>" method="post" enctype="multipart/form-data" >
                  <button type="submit" style="margin-top: 0px;" class="right btn waves-effect waves-light red hoverable">DELETE</button>
                </form>
              </div>
              <div class="collapsible-body">
                <span>
                  <span style="margin-left: 20px;">
                    <b>Text: </b>
                    <?php echo $text ?>
                  </span>
                  <br/><br/>
                  <span class="iconPair"> <i class="fas fa-user"></i>&nbsp; <?php echo $author?> </span>
                  <span class="iconPair"> <i class="far fa-calendar-alt"></i>&nbsp;&nbsp; <?php echo $timestamp?> </span>
                </span> <br/><br/>
                <span><b>Picture: </b> </span><br/>
                <img style="max-width: 100%" src="<?php echo '../'.$imgSrc?>" />
              </div>
            </li>
            <?php
              // End foreach:
              }
            ?>
        </ul>

      </div>

      <!-- Back to dashboard button -->
      <?php include("../../includes/backToDash.php"); ?>

    </div>
    </div>
  </main>
</body>

</html>
