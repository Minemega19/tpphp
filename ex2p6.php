<?php
  //require_once("include/config.inc.php");
  //require_once("include/connect.inc.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>TP2 PHP</title>
</head>
    <h1>Modification &/ou du mail </h1>
    <?php
     $getOldPage = $_POST["PrenomModif"];
     $db = mysqli_connect ("localhost","root","");
        mysqli_select_db($db,"client"); 
     $sql = "SELECT PRENOM_CLIENT, MAIL_CLIENT FROM CLIENT WHERE NO_CLIENT = $getOldPage";
     $result = mysqli_query($db,$sql);
     $ligne = mysqli_fetch_array($result);
     $nouvPrenom = $ligne["PRENOM_CLIENT"];
     $nouvNom = $ligne["NOM_CLIENT"];
     $modif = "UPDATE CLIENT SET NOM_CLIENT = $nouvNom, PRENOM_CLIENT = $nouvPrenom, WHERE id = $getOldPage";
    ?>
    
    <input type="submit" value="BACK" href="ex2p5.php">

<body>