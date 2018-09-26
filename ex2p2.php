<html>
<head>
<meta http-equiv="Content-type" content="text/html;charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="mycss.css">
<title>MERCI de remplir le formulaire</title>
</head>
<body>
    <?php
        $db = mysqli_connect ("localhost","root","");
        mysqli_select_db($db,"client");    
        $nom = $_POST["FormNomCli"];
        $prenom = $_POST["FormPrenomCli"];
        $email = $_POST["FormEmlCli"];
        echo "<b>Nom</b> : $nom </br>";
        echo "<b>Prenom</b> : $prenom </br>";
        echo "<b>email</b> : $email </br>";
    
        echo "$nom, $prenom, $email";
        if(isset($_POST["Valider"])){
            if(empty($_POST["Diffusion"])){
                $inscrit = 0;
            }else{ $inscrit = 1;}
        }
        if($inscrit == 0){ //ça c'est pour le tick à cocher 
            echo "</br> Le client est pas inscrit </br>";
        }else{
            echo "</br> L'inscription s'est déroulée de façon correct </br>";
        }
        $sql = "INSERT INTO CLIENT(NOM_CLIENT, PRENOM_CLIENT, MAIL_CLIENT, INSCRIT_CLIENT) VALUES ('$nom', '$prenom','$email','$inscrit')";
        $send = mysqli_query($db,$sql);
        if($send){
            echo "</br> C'est bon t'es dans la base </br>";
        }else{
            echo "</br> Faut bien se connecter </br>";
        }
    echo "</br></br></br>";
    ?>
    <form action="ex2p3.php" method="get">
        <button type="submit" formaction="ex2p3.php">Se rendre au tableau de qualité supérieur</button>
    </form>