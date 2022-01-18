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
    ]

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
    
    <?php 
        echo "<pre>";
        var_dump($nba);
        echo "</pre>"; 
    ?>

    <h1>Risultati NBA</h1>
    <ul>
        <?php  
            for ($i = 0; $i <= count($nba[$i]); $i++)
                 echo "<li>{$nba[$i]['teamHome']} - {$nba[$i]['teamAway']} | {$nba[$i]['teamHomeScore']} - {$nba[$i]['teamAwayScore']}</li>"
        ?>
    </ul>

</body>
</html>