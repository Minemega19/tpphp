<?php
  //require_once("include/config.inc.php");
  //require_once("include/connect.inc.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>TP2 PHP</title>
</head>
    <h1>Modification &/ou du mail </h1>
    <?php

     $nouvPrenom = $_POST["PrenomModif"];
     $nouvMail = $_POST["MailModif"];
     $val = $_SESSION['IDCLI'];
     $db = mysqli_connect ("localhost","root","");
        mysqli_select_db($db,"client"); 
     $sql = "UPDATE CLIENT SET MAIL_CLIENT = '$nouvMail', PRENOM_CLIENT = '$nouvPrenom' WHERE NO_CLIENT = $val";
     $result = mysqli_query($db,$sql);
    ?>
    
    <form action="ex2p7.php" method="post">
        <button type="submit" formaction="ex2p7.php">Allez à la page de suppression</button>
    </form>

<body>