<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->


<?php

    $_GET["name"];
    $_GET["mail"];
    $_GET["age"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks blocco 1</title>
</head>
<body>
    
    <h1>
        <?php 
            if(strpos($_GET['mail'], '@') && strpos($_GET['mail'], '.') && is_numeric($_GET["age"]) !== false && strlen($_GET["name"]) > 3){
                echo "Accesso riuscito";
            }else{
                echo "Accesso negato";
            }
        ?>
    </h1>

    
</body>
</html>