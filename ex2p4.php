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
      $db = mysqli_connect ("localhost","root","");
        mysqli_select_db($db,"client"); 
      $sql = "SELECT NOM_CLIENT, NO_CLIENT FROM CLIENT";
      $result = mysqli_query($db,$sql);
    
    ?>
    <form method = "post" action="ex2p5.php">
        <select name="ChoixClient">
            
           <?php
            while($ligne = mysqli_fetch_array($result)){           ?>
                <option value="<?php echo $ligne["NO_CLIENT"] ?>"><?php echo $ligne["NOM_CLIENT"] ?></option>
            <?php } ?>

        </select>
        <input type="submit" value="Ok">
</form>
<body>