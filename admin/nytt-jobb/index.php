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
  <title>IT Expert | Devmattb - Admin - Create A New Job Search</title>

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
      <form action="../../php/new-job.php" method="post" enctype="multipart/form-data" class="col s10 offset-s1">
        <h4 style="margin-left: 10px;"> Publicera en ny rollansökan! </h4>
        <br/>

        <!-- Jobbtitel: -->
        <div class="input-field col s12">
          <input name="jobTitle" placeholder="Ex. Systemutvecklare" id="jobTitle" type="text">
          <label for="jobTitle">Jobbtitel</label>
        </div>

        <!-- Inledningstext: -->
        <div class="input-field col s12">
          <textarea name="jobText" id="jobText" placeholder="Kort beskrivning..." class="materialize-textarea"></textarea>
          <label for="jobText">Kort Jobbeskrivning</label>
        </div>

        <div class="col s12"><p><b> Separera de sökta kvalitéerna/erfarenheterna med komma ( , ) i fältet nedan: </b></p> </div> <br/>
        <!-- Erfarenheter -->
        <div class="input-field col s12">
          <input name="jobQualifications" placeholder="Ex. IT Kunnnig, Examen inom Systemutveckling, m.m." id="jobQualifications" type="text">
          <label for="jobQualifications">Kvalitélista</label>
        </div>

        <div class="input-field col s12">
          <textarea name="jobLongText" id="jobLongText" placeholder="Beskrivning... (EJ OBLIGATORISK)" class="materialize-textarea"></textarea>
          <label for="jobLongText">Djupare Beskrivning (EJ OBLIGATORISK)</label>
        </div>

        <div class="col s12">
          <button type="submit" class="btn blue"> Lägg till roll! </button>
        </div>
      </form>

      <!-- Back to dashboard button -->
      <?php include("../../includes/backToDash.php"); ?>
      </div>
    </div>
  </main>
</body>

</html>
