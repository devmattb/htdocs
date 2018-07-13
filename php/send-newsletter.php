<?php
  require("functions.php");
  // Import PHPMailer classes into the global namespace
  // These must be at the top of your script, not inside a function
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require '../PHPMailer/src/Exception.php';
  require '../PHPMailer/src/PHPMailer.php';
  require '../PHPMailer/src/SMTP.php';

  if (empty($_POST["subject"]) || empty($_POST["msg"])) {
    echo 'Some details were missing. <a href="../admin/send-newsletter/"> Go Back. </a>';
  } else {

  /**
  *   Set the admin-details of the email:
  **/
  $mail = new PHPMailer;
  $mail->isSMTP();
  $mail->Host = 'mailcluster.loopia.se'; // TODO
  $mail->SMTPAuth = true;
  $mail->Username = 'matt@devmattb.com'; // SMTP username TODO
  $mail->Password = ''; // SMTP password TODO
  $mail->SMTPSecure = 'tls';
  $mail->Port = 587;
  $mail->CharSet = 'UTF-8';

  $db = getDB();
  $query = "SELECT * FROM emailList";
  $data = getContents($db, $query);

  foreach($data as $row) {

    // Get all data from form:
    $subject = getSecureData($_POST["subject"]);
    $text = getSecureData($_POST["msg"]);

    // Get DB Data:
    $id = $row["id"];
    $email = $row["email"];

    /**
    *   Set the details of the email:
    **/
    $mail->From = 'matt@devmattb.com' ;
    $mail->FromName = 'Devmattb';
    $mail->addAddress($email); // Add a recipient
    //$mail->addAddress('ellen@example.com'); // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');

    $mail->Subject = $subject;
    $mail->Body = $text + "<br/><br/> Don't want these emails? Unsubscribe using the following link: <br/><br/>".
    '<a href="http://devmattb.com/php/unsubscribe-newsletter.php?id='.$id.'&email='.$email.'">Unsubscribe</a>';
    $mail->AltBody = $text + "\n \n Don't want these emails? Unsubscribe using the following link: \n \n ".
    'http://devmattb.com/php/unsubscribe-newsletter.php?id='.$id.'&email='.$email;

    $mail->send();
    // Prepare for next email:
    $mail->ClearAllRecipients();
    $mail->ClearAttachments();
  }
?>
