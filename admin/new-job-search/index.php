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

  <!-- Page Content -->
  <main>
    <div class="row">
      <div class="col s12">
      <br/><br/><br/><br/>
      <form action="../../php/new-job.php" method="post" enctype="multipart/form-data" class="col s10 offset-s1">
        <h4 style="margin-left: 10px;"> Publish a New Job Search! </h4>
        <br/>

        <!-- Jobbtitel: -->
        <div class="input-field col s12">
          <input name="jobTitle" placeholder="E.g. Social Media Manager" id="jobTitle" type="text">
          <label for="jobTitle">Job Title</label>
        </div>

        <!-- Inledningstext: -->
        <div class="input-field col s12">
          <textarea name="jobText" id="jobText" placeholder="Short description..." class="materialize-textarea"></textarea>
          <label for="jobText">Short Job Description</label>
        </div>

        <div class="col s12"><p><b> Required Experience: Seperate the sought experience/qualities with commas ( , ) in the field below. </b></p> </div> <br/>
        <!-- Erfarenheter -->
        <div class="input-field col s12">
          <input name="jobQualifications" placeholder="E.g. Social Media Expert, Language Specialist, etc." id="jobQualifications" type="text">
          <label for="jobQualifications">Quality List</label>
        </div>

        <div class="input-field col s12">
          <textarea name="jobLongText" id="jobLongText" placeholder="Description... (NOT MANDATORY)" class="materialize-textarea"></textarea>
          <label for="jobLongText">Long Description (NOT MANDATORY)</label>
        </div>

        <div class="col s12">
          <button type="submit" class="btn webOrange"> PUBLISH! </button>
        </div>
      </form>

      <!-- Back to dashboard button -->
      <?php include("../../includes/backToDash.php"); ?>
      </div>
    </div>
  </main>
</body>

</html>
