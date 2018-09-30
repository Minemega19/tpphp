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
<body>
  <table border="3">
    <tr>
      <th>Nom</th>
      <th>Prénom</th>
      <th>Mail</th>
      <th>Inscrit</th>
    </tr>

    <?php
      $db = mysqli_connect ("localhost","root","");
        mysqli_select_db($db,"client"); 
      $sql = "SELECT NOM_CLIENT, PRENOM_CLIENT, MAIL_CLIENT, INSCRIT_CLIENT FROM CLIENT";
      $result = mysqli_query($db,$sql);

      while($ligne = mysqli_fetch_array($result)){
    ?>
        <tr>
          <td><?php echo $ligne["NOM_CLIENT"] ?></td>
          <td><?php echo $ligne["PRENOM_CLIENT"] ?></td>
          <td><?php echo $ligne["MAIL_CLIENT"] ?></td>
          <?php
          if($ligne['INSCRIT_CLIENT'] == 0){
            ?>
            <td>NON</td> </tr>
            <?php
          }else{
            ?>
            <td>OUI</td> </tr>
            <?php
          }
      }
    ?>
