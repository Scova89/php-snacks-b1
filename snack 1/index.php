<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
    $partite = [
        [
            "squadraCasa" => "Olimpia Milano",
            "puntiCasa" => 55,
            "squadraOspite" => "Cantù",
            "puntiOspite" => 60
        ],
        [
            "squadraCasa" => "Genova",
            "puntiCasa" => 45,
            "squadraOspite" => "Cagliari",
            "puntiOspite" => 30
        ],
        [
            "squadraCasa" => "Roma",
            "puntiCasa" => 25,
            "squadraOspite" => "Napoli",
            "puntiOspite" => 30
        ],
        [
            "squadraCasa" => "Cervia",
            "puntiCasa" => 60,
            "squadraOspite" => "Ancona",
            "puntiOspite" => 40
        ],
    ]
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

    <h1>Risultati delle partite</h1>
    <ul>
        <?php
            for($i = 0; $i < count($partite); $i++){
                echo "<li>". $partite[$i]["squadraCasa"] . " - " . $partite[$i]["squadraOspite"] . " | " . $partite[$i]["puntiCasa"] . "-" . $partite[$i]["puntiOspite"] . "</li>";
            }
        ?>
    </ul>
    
</body>
</html>