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
  <title>IT Expert | Devmattb - Admin - Delete Job Search</title>

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
        <h4> Delete Job Searches: </h4>
        <ul class="collapsible">
          <?php
            $query = 'SELECT * FROM job ORDER BY id DESC';
            $data = getContents($db, $query);
            foreach($data as $row) {
              $id = $row["id"];
              $title = $row["jobTitle"];
              $text = $row["jobText"];
              $longText = $row["jobLongText"];
              $qualificationListItems = explode(",",$row["jobQualifications"]);
          ?>
          <li class="hoverable tooltipped" data-position="bottom" data-tooltip="Click for detailed info!">
            <div class="collapsible-header">
              <i class="fas fa-user-tie webOrange-text text-darken-4"></i> &nbsp; <span style="font-weight: 900;"><?php echo $title; ?></span>
              <form class="col s12" action="<?php echo '../../php/delete-job.php?id='.$id?>" method="post" enctype="multipart/form-data" >
                <button type="submit" style="margin-top: 0px;" class="right btn waves-effect waves-light red hoverable">DELETE</button>
              </form>
            </div>
            <div class="collapsible-body">
                <p style="font-weight: 900; letter-spacing: 0.5px;">
                  Short Description:
                <p>
                <blockquote><?php echo $text; ?></blockquote>
                <hr/>
                <p style="font-weight: 900; letter-spacing: 0.5px;">
                  Required Experience:
                <p>
                <ul class="browser-default" style="list-style: square!important;">
                  <?php
                    // Show all qualifications:
                    foreach($qualificationListItems as $li) {
                    ?>
                      <li> <?php echo $li; ?> </li>
                    <?php
                    }
                  ?>
                </ul>

                <?php
                  if (isset($longText) && !empty($longText)) {
                    echo
                    '<br/>
                    <p style="font-weight: 900; letter-spacing: 0.5px;">
                      More Information:
                    <p>
                    <p>'.$longText.'</p><br/><br/>';
                  } else {
                    echo '<br/><br/>';
                  }
                ?>
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
