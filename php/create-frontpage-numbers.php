<?php
  require_once("functions.php");
  $db = getDB();
  $query = 'SELECT * FROM frontPageNumbers';
  $data = getContents($db, $query);

  // IF WE HAVE LESS THAN
  if (count($data) <= 2) {

    // No root account exists. Create the root admin account.
    $numTitles = ["TIDIGARE KUNDER", "KUNDTILLFREDSTÄLLELSE", "NYEXAMINERADE INGENJÖRER"];
    $numArr = [213, 98, 5];

    // DELETE ALL PREVIOUS NUMBERS FROM THE TABLE:
    $sql = "TRUNCATE TABLE frontPageNumbers";
    $query = $db->prepare($sql);
    $query->execute();

    // START INSERTING THE DEFAULT DATA:
    $sql = 'INSERT INTO frontPageNumbers (numberTitle, num)
    VALUES
    ("TIDIGARE KUNDER", 213),
    ("KUNDTILLFREDSTÄLLELSE", 98),
    ("NYEXAMINERADE INGENJÖRER", 5);';

    // Execute command:
    $query = $db->prepare($sql);
    $query->execute();
  }

?>
