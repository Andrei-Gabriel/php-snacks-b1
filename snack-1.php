<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 
    $nba = [
        [
                "teamHome" => "Atlanta Hawks",
                "teamHomeScore" => "121",
                "teamAway" => "Milwaukee Bucks",
                "teamAwayScore" => "114",
        ],
        [
                "teamHome" => "Orlando Magic",
                "teamHomeScore" => "88",
                "teamAway" => "Portland Trail Blazers",
                "teamAwayScore" => "98",
        ],
        [
                "teamHome" => "Miami Heat",
                "teamHomeScore" => "104",
                "teamAway" => "Toronto Raptors",
                "teamAwayScore" => "99",
        ],
    ];
    
    echo "<h2>Primo metodo</h2>";
    for ($i = 0; $i < count($nba); $i++){
        echo "{$nba[$i]["teamHome"]} - {$nba[$i]["teamAway"]} | {$nba[$i]["teamHomeScore"]} - {$nba[$i]["teamAwayScore"]}<br>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NBA</title>
</head>
<body>
    <h1>Ricordati di premere "Ctrl + U"</h1>
    <ul>
        <li><h2>Secondo metodo</h2></li>
        <?php
            for ($i = 0; $i < count($nba); $i++){
                echo "<li>{$nba[$i]["teamHome"]} - {$nba[$i]["teamAway"]} | {$nba[$i]["teamHomeScore"]} - {$nba[$i]["teamAwayScore"]}</li>";
            }
        ?>

        <li><h2>Terzo metodo</h2></li>
        <?php for ($i = 0; $i < count($nba); $i++){ ?>
                <li><?php echo $nba[$i]["teamHome"] ?> - <?php echo $nba[$i]["teamAway"]?> | <?php echo $nba[$i]["teamHomeScore"] ?> - <?php echo $nba[$i]["teamAwayScore"] ?></li>
        <?php } ?>

        <li><h2>Quarto metodo</h2></li>
        <?php for ($i = 0; $i < count($nba); $i++){ ?>
                <li><?= $nba[$i]["teamHome"] ?> - <?= $nba[$i]["teamAway"]?> | <?= $nba[$i]["teamHomeScore"] ?> - <?= $nba[$i]["teamAwayScore"] ?></li>
        <?php } ?>

        <li><h2>Quinto metodo</h2></li>
        <?php for ($i = 0; $i < count($nba); $i++): ?>
                <li><?= $nba[$i]["teamHome"] ?> - <?= $nba[$i]["teamAway"]?> | <?= $nba[$i]["teamHomeScore"] ?> - <?= $nba[$i]["teamAwayScore"] ?></li>
        <?php endfor; ?>
    </ul>
</body>
</html>