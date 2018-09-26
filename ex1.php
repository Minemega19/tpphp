<html>
<head>
<meta http-equiv="Content-type" content="text/html;charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="mycss.css">
<title>MERCI de remplir le formulaire</title>
</head>
<body>
	<?php 
        
    ?>
    <form action="ex2p2.php" id="insert" method="post">
        Nom <input type="text" name="FormNomCli" size="4">
        <br>
			Prenom <input type="text" name="FormPrenomCli" size="4">
        <br>
			Email <input type="text" name="FormEmlCli" size="4">
        <br>
        <input type="checkbox" name="Diffusion" value="oui">Ajoutez moi à la liste de diffusion <br>
			
        <input type="submit" name="Valider" value="Envoyer " />
        <input type="reset" value="annuler" />
</form>
<!--
            <form>
                <tr>
                    <?php
                    echo '<table>';
                    for($i=1;$i<=9;$i++)
                    {
                        echo "<td class='impaire'>$i</td>";
                    }
                    for($i=2;$i<=9;$i++)
                    {
                        echo'<tr>';
                        for($j=1;$j<=9;$j++)
                        {
                            $mult = $i*$j;
                            if($i%2==0){
                                echo "<td class='impaire'>$mult</td>";

                            }else{
                                echo "<td class='paire'>$mult</td>";
                            }

                        }
                        echo'</tr>';
                    }
                    echo '</table>';
                    ?>
                </tr>
            </form>
-->
    </body>
</html>			