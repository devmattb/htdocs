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
      <form action="../../php/send-newsletter.php" method="post" enctype="multipart/form-data" class="col s10 offset-s1">
        <h4 style="margin-left: 10px;"> Send a Newsletter! </h4>
        <br/>

        <!-- Jobbtitel: -->
        <div class="input-field col s12">
          <input name="subject" placeholder="E.g. This Weeks Insights" id="subject" type="text">
          <label for="subject">Subject</label>
        </div>

        <!-- Inledningstext: -->
        <div class="input-field col s12">
          <textarea name="msg" id="msg" placeholder="Your message..." class="materialize-textarea"></textarea>
          <label for="msg">Message</label>
        </div>

        <div class="col s12">
          <button type="submit" class="btn green"> SEND! </button>
        </div>
      </form>

      <!-- Back to dashboard button -->
      <?php include("../../includes/backToDash.php"); ?>
      </div>
    </div>
  </main>
</body>

</html>
