<html>
<head>
<meta http-equiv="Content-type" content="text/html;charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="mycss.css">
<title>MERCI de remplir le formulaire</title>
</head>
<body>
    <?php
        $sql = "INSERT INTO CLIENT(NOM_CLIENT, PRENOM_CLIENT, MAIL_CLIENT, INSCRIT_CLIENT) VALUES ('$nom', '$prenom','$email','$inscrit')";
        $send = mysqli_query($db,$sql);
    ?>
    </body>
    
