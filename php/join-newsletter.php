<?php

  require("functions.php");
  $db = getDB();
  // Start the session if it doesn't exist.
  if(session_id() == '' || !isset($_SESSION)) {
      // session isn't started
      session_start();
  }

  // Check Fields
  if ( empty($_POST["email"]) ) {
      $_SESSION["error"] = 10;
      // Send home
      header("Location: ../");
      return;
  }

  $email = getSecureData($_POST["email"]);
  $hash = password_hash($email, PASSWORD_BCRYPT);
  $sql = "INSERT INTO emailList (email, hash) VALUES (:email, :hash)";

  // Execute command:
  $query = $db->prepare($sql);
  $query->execute(array(':email'=>$email,':hash'=>$hash));

  // Success
  $_SESSION["error"] = 17;
  header("Location: ../");

?>
