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
      $ChoixClient2 = $_POST["ChoixClient"];
      $db = mysqli_connect ("localhost","root","");
        mysqli_select_db($db,"client"); 
      $sql = "SELECT PRENOM_CLIENT, MAIL_CLIENT FROM CLIENT WHERE NO_CLIENT = $ChoixClient2";
      $result = mysqli_query($db,$sql);
      $ligne = mysqli_fetch_array($result);
      $_SESSION['IDCLI'] = $ChoixClient2;
    ?>
<form method = "post" action="ex2p6.php">
    Prenom : <input type="text" name="PrenomModif" value="<?php echo $ligne["PRENOM_CLIENT"] ?>"><br>
    Mail : <input type="text" name="MailModif" value="<?php echo $ligne["MAIL_CLIENT"] ?>"><br>
    <input type="submit" value="Ok">
    <input type="submit" value="Effacer">
</form>

<body>