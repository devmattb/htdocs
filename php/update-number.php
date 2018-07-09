<?php
  require("functions.php");
  $db = getDB();
  // Start the session if it doesn't exist.
  if(session_id() == '' || !isset($_SESSION)) {
      // session isn't started
      session_start();
  }

  $id = $_GET["id"];

  if (empty($_POST["num"]) || empty($_POST["numberTitle"])) {
    // Mandatory fields missing...
    $_SESSION["error"] = 10;
    header("Location: ../admin/hantera-siffror");
    return;
  }

  $numberTitle = strtoupper(getSecureData($_POST["numberTitle"]));
  $num = getSecureData($_POST["num"]);

  $sql = 'UPDATE frontPageNumbers SET numberTitle="'.$numberTitle.'", num='.$num.' WHERE id='.$id;

  // Execute command:
  $query = $db->prepare($sql);
  $query->execute();

  $_SESSION["error"] = 15; // Success

  // Redirect
  header("Location: ../admin/hantera-siffror");

?>
