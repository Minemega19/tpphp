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
      $db = mysqli_connect ("localhost","root","");
        mysqli_select_db($db,"client"); 
      $sql = "SELECT NOM_CLIENT, NO_CLIENT FROM CLIENT";
      $result = mysqli_query($db,$sql);
    
    ?>
    <form method = "post" action="ex2p8.php">
        <input type="submit" value="Supprimer un client">
	</form>
	<br>
	 <form method = "post" action="ex2NP.php">
        <input type="submit" value="Garder le client">
	 </form>
<body>