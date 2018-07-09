<?php
  // PHP LIB ALREADY INCLUDED WHERE THIS FILE IS INCLUDED!
  $db = getDB();
  $query = 'SELECT * FROM account WHERE username="qrendoadmin"';
  $data = getContents($db, $query);

  if (count($data) <= 0) {

    // No root account exists. Create the root admin account.
    $username = "qrendoadmin";
    // TODO: Change pass!
    $password = password_hash("violetbokmedsirap", PASSWORD_BCRYPT);
    $fullName = "SUPER_USER";
    $email = "kontakt@qrendo.se";
    $permissionTitle = "admin";
    $sql = "INSERT INTO account (username, password, fullName, email, permissionTitle) VALUES (:username, :password, :fullName, :email, :permissionTitle)";

    // Execute command:
    $query = $db->prepare($sql);
    $query->execute(array(':username'=>$username,':password'=>$password, ':fullName'=>$fullName, ':email'=>$email, ':permissionTitle'=>$permissionTitle));
  }

?>
