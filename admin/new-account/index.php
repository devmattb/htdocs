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
  <title>IT Expert | Devmattb - Admin - Create New Account</title>

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
      <form action="../../php/new-account.php" method="post" enctype="multipart/form-data" class="col s10 offset-s1">
        <h4 style="margin-left: 10px;"> Skapa ett nytt konto till administrationssystemet! </h4>
        <br/>

        <!-- Username: -->
        <div class="input-field col s12">
          <input name="username" placeholder="Ex. qrendoPatrik" id="username" type="text">
          <label for="username">Användarnamn</label>
        </div>

        <!-- Pass1 -->
        <div class="input-field col s12">
          <input name="pass1" placeholder="Lösenord..." id="pass1" type="password">
          <label for="pass1">Lösenord</label>
        </div>

        <!-- Pass2 -->
        <div class="input-field col s12">
          <input name="pass2" placeholder="Upprepa Lösenord..." id="pass2" type="password">
          <label for="pass2">Upprepa Lösenord</label>
        </div>

        <!-- Full Name -->
        <div class="input-field col s12">
          <input name="fullName" placeholder="Ex. Marcus Magnusson" id="fullName" type="text">
          <label for="fullName">Fullständigt Namn</label>
        </div>

        <!-- Email -->
        <div class="input-field col s12">
          <input class="validate" name="email" placeholder="Ex. marcusM@qrendo.se" id="email" type="email">
          <label for="email">Epost</label>
        </div>

        <p>
          <b style="font-weight:900;">Välj kontotyp:</b> <br/><br/>
          Det finns två olika kontotyper med olika tillgång i administrationssystemet.
          <ul class="browser-default">
            <li>Admin - Har tillgång till hela administrationssystemet. </li>
            <li>Användare - Har endast tillgång till att göra inlägg på nyhetssidan. </li>
          </ul>
        </p>

        <!-- Permission Title -->
        <div class="input-field col s12">
          <select name="permissionTitle">
            <option value="" disabled selected>Välj kontotyp</option>
            <option value="admin">Admin</option>
            <option value="användare">Användare</option>
          </select>
          <label>Kontotyp</label>
        </div>

        <div class="col s12">
          <button type="submit" class="btn blue"> Skapa Konto! </button>
        </div>
      </form>

      <!-- Back to dashboard button -->
      <?php include("../../includes/backToDash.php"); ?>
    </div>
    </div>
  </main>
</body>

</html>
