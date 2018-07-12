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
  <title>IT Expert | Devmattb - Admin - Delete Account</title>

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
  <!-- PRELOADER -->
  <?php include("../../includes/preloader.html") ?>

  <!-- Page Content -->
  <main>
    <div class="row">
      <div class="col s12">
      <br/><br/><br/><br/>
      <div class="col s10 offset-s1">
        <h4> Radera Konton: </h4>
        <ul class="collapsible">
          <?php
            $query = 'SELECT * FROM adminAccounts WHERE id <> "'.$_SESSION["authenticated"].'"  ORDER BY id DESC';
            $data = getContents($db, $query);
            foreach($data as $row) {
              $id = $row["id"];
              $user = $row["username"];
              $fullName = $row["fullName"];
              $email = $row["email"];
              $permissionTitle = $row["permissionTitle"];
              $timestamp = $row["createdAt"];
          ?>
            <li class="hoverable tooltipped" data-position="bottom" data-tooltip="Klicka för att se detaljerad info!">
              <div class="collapsible-header">

                <i style="font-size: 18px;" class="fa fa-user blue-text"></i>
                <b><?php echo $user ?></b>
                <span
                  style="margin-left: 30px; margin-top: 2px; width: 100px;"
                  class="<?php if ( $permissionTitle == 'admin' ){ echo 'new badge red'; } else { echo 'new badge blue'; } ?>"
                  data-badge-caption=<?php echo $permissionTitle ?>
                ></span>

                <form class="col s12" action="<?php echo '../../php/delete-account.php?id='.$id?>" method="post" enctype="multipart/form-data" >
                  <button type="submit" style="margin-top: 0px;" class="right btn waves-effect waves-light red hoverable">RADERA</button>
                </form>
              </div>
              <div class="collapsible-body">
                <div  style="margin-left: 20px;">
                  <span>
                    <b> Fullständigt Namn: </b>
                    <?php echo $fullName ?>
                    <br/><br/>
                    <b> Epost: </b>
                    <?php echo $email ?>
                    <br/><br/>
                    <span class="iconPair"> <i class="far fa-calendar-alt"></i>&nbsp;&nbsp; <b>Skapades:</b> <?php echo $timestamp?> </span>
                  </span>
                </div>
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
