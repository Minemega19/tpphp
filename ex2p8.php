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
    <h1>Le client a été supprimé avec succès </h1>
    <?php
	  $val = $_SESSION['IDCLI'];
      $db = mysqli_connect ("localhost","root","");
        mysqli_select_db($db,"client"); 
      $sql = "DELETE FROM CLIENT WHERE NO_CLIENT = $val";
      $result = mysqli_query($db,$sql);
    ?>
<body>