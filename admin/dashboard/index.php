<!-- Authentication -->
<?php require_once("../../php/authenticate.php") ?>

<!-- PHP Lib -->
<?php require_once("../../php/functions.php"); ?>

<?php

  $db = getDB();
  $query = 'SELECT * FROM adminAccounts WHERE id="'.$_SESSION["authenticated"].'"';
  $data = getContents($db, $query);
  foreach ($data as $row) {
    $permissionTitle = $row["permissionTitle"];
  }

?>

<!DOCTYPE html>
<html>
<head>
  <!-- Title SEO -->
  <title>IT Expert | Devmattb - Admin Dashboard</title>

  <!-- HEADER -->
  <?php require_once("../../includes/header.html") ?>

  <!-- CSS -->
  <link type="text/css" rel="stylesheet" href="../../css/stylesheet.css"/>
  <link type="text/css" rel="stylesheet" href="../../css/slider.css" />

  <!-- JS -->
  <script src="../../js/init.js" type="text/javascript"></script>

  <script>
    $(document).ready(function(){
      window.setTimeout(function(){ $(".card").removeClass("scale-out")}, 150);
    });
  </script>

  <!-- Error Handling visualization -->
  <?php include("../../php/errors.php"); ?>
</head>
<body>
<!-- PRELOADER -->
<?php include("../../includes/preloader.html") ?>

<!-- LOGIN FORM -->
<div style="margin-top: 30px;" id="page" class="row col s12">
    <header id="banner" class="center">
      <h4>Devmattb <?php if ($permissionTitle == "admin") { echo "Admin"; }?> Dashboard</h4> <br/>
    </header>

    <div class="card blue-grey darken-1 z-depth-2 scale-transition scale-out">
      <div class="card-content white-text">
        <span class="card-title">Hantera Nyheter:</span>
        <p>Skapa nya inlägg på nyhetssidan, och radera gamla. Klicka in på någon av knapparna nedan för att gå vidare. </p>
      </div>
      <div class="card-action">
        <a href="../nytt-inlagg/"><button style="margin: 10px;" class="btn green waves-effect waves-light hoverable"> Skapa Inlägg </button></a>
        <?php if ($permissionTitle == "admin") { echo '<a href="../radera-inlagg/"><button style="margin: 10px;" class="btn red waves-effect waves-light hoverable"> Radera Inlägg </button></a>';}?>
      </div>
    </div>
    <?php
      if ($permissionTitle == "admin") { echo '
        <div class="card blue-grey darken-1 z-depth-2 scale-transition scale-out">
          <div class="card-content white-text">
            <span class="card-title">Hantera Konton:</span>
            <p>
               Skapa nya konton och radera gamla. Dessa konton fungerar som administrationskonton,
               och kan alla komma åt adminverktygen. <br/>
               Klicka in på någon av knapparna nedan för att gå vidare.
            </p>
          </div>
          <div class="card-action">
            <a href="../nytt-konto/"><button style="margin: 10px;" class="btn green waves-effect waves-light hoverable"> Skapa Nytt Konto </button></a>
            <a href="../radera-konto/"><button style="margin: 10px;" class="btn red waves-effect waves-light hoverable"> Radera Konton </button></a>
          </div>
        </div>

        <div class="card blue-grey darken-1 z-depth-2 scale-transition scale-out">
          <div class="card-content white-text">
            <span class="card-title">Hantera Rekrytering:</span>
            <p>
              Lägg till eller ta bort jobbeskrivningar som visas på "Jobba Hos Oss" sidan.
              Klicka in på någon av knapparna nedan för att gå vidare.
            </p>
          </div>
          <div class="card-action">
            <a href="../nytt-jobb/"><button style="margin: 10px;" class="btn green waves-effect waves-light hoverable"> Lägg Till Roll </button></a>
            <a href="../radera-jobb/"><button style="margin: 10px;" class="btn red waves-effect waves-light hoverable"> Radera Roll  </button></a>
          </div>
        </div>

        <div class="card blue-grey darken-1 z-depth-2 scale-transition scale-out">
          <div class="card-content white-text">
            <span class="card-title">Hantera Siffror:</span>
            <p> Ändra på de siffror som skyltas med på framsidan. Klicka på knappen nedan för att gå vidare. </p>
          </div>
          <div class="card-action">
            <a href="../hantera-siffror/"><button style="margin: 10px;" class="btn green waves-effect waves-light hoverable"> Ändra siffror </button></a>
          </div>
        </div>
    '; } ?>
        <div class="col s12 center">
          <a href="../../">
            <button class="btn blue waves-effect waves-light hoverable">
              <i class="fas fa-home"></i> &nbsp;
              <span style="position:relative; top: -1px">Till Hemsidan</span>
            </button>
          </a>
          <br/><br/>
          <form method="POST" action="../../php/logout.php">
            <button type="submit" class="btn red waves-effect waves-light hoverable">
              <span style="position:relative; top: -2px">Logga Ut</span>
              &nbsp;<i class="fas fa-sign-out-alt"></i>
            </button>
          </form>
        </div>
</div>

<?php include("../../includes/adminFooter.php"); ?>

</body>
</html>
