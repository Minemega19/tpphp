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
<body>

    <?php
	  $ChoixClient2 = $_POST["ChoixClient"];
      $db = mysqli_connect ("localhost","root","");
        mysqli_select_db($db,"client"); 
      $sql = "SELECT NOM_CLIENT, PRENOM_CLIENT, MAIL_CLIENT, INSCRIT_CLIENT FROM CLIENT";
      $result = mysqli_query($db,$sql);
    <form method = "post" action="ex2p8.php">
        Prenom : <input type="text" name="PrenomModif" value="<?php echo $ligne["PRENOM_CLIENT"] ?>"><br>
        Mail : <input type="text" name="MailModif" value="<?php echo $ligne["MAIL_CLIENT"] ?>"><br>
        <input type="submit" value="Ok">
        <input type="submit" value="Effacer">
        </form>
<form action="ex2p8.php" method="post">
        <button type="submit" formaction="ex2p8.php">Supprimer un client</button>
</form>