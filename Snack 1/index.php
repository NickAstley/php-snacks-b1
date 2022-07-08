<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 
// Creo l'array
$basketballGames = [
    [
        "homeTeam" => "Philadelphia 76ers",
        "awayTeam" => "Detroit Pistons",
        "homeTeamScore" => "118",
        "awayTeamScore" => "106"
    ],
    [
        "homeTeam" => "Orlando Magic",
        "awayTeam" => "Miami Heat",
        "homeTeamScore" => "125",
        "awayTeamScore" => "111"
    ],
    [
        "homeTeam" => "New York Knicks",
        "awayTeam" => "Toronto Raptors",
        "homeTeamScore" => "105",
        "awayTeamScore" => "94"
    ],
    [
        "homeTeam" => "Memphis Grizzlies",
        "awayTeam" => "Boston Celtics",
        "homeTeamScore" => "110",
        "awayTeamScore" => "139"
    ],
    [
        "homeTeam" => "Minnesota Timberwolves",
        "awayTeam" => "Chicago Bulls",
        "homeTeamScore" => "120",
        "awayTeamScore" => "124"
    ],
    [
        "homeTeam" => "New Orleans Pelicans",
        "awayTeam" => "Golden State Warriors",
        "homeTeamScore" => "107",
        "awayTeamScore" => "128"
    ],
    [
        "homeTeam" => "Phoenix Suns",
        "awayTeam" => "Sacramento Kings",
        "homeTeamScore" => "109",
        "awayTeamScore" => "116"
    ],
    [
        "homeTeam" => "Denver Nuggets",
        "awayTeam" => "Los Angeles Lakers",
        "homeTeamScore" => "141",
        "awayTeamScore" => "146"
    ],
    [
        "homeTeam" => "Portland Trail Blazers",
        "awayTeam" => "Utah Jazz",
        "homeTeamScore" => "80",
        "awayTeamScore" => "111"
    ],
    [
        "homeTeam" => "Los Angeles Clippers",
        "awayTeam" => "Oklahoma City Thunder",
        "homeTeamScore" => "138",
        "awayTeamScore" => "88"
    ],
    [
        "homeTeam" => "Dallas Mavericks",
        "awayTeam" => "San Antonio Spurs",
        "homeTeamScore" => "130",
        "awayTeamScore" => "120"
    ]
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <!-- Stampo con un ciclo for le informazioni per ogni partita -->
    <?php for ($i = 0; $i < count($basketballGames); $i++) { ?>
        <div>
            <?php echo $basketballGames[$i]["homeTeam"] . " - " . $basketballGames[$i]["awayTeam"] . " | " . $basketballGames[$i]["homeTeamScore"] . "-" . $basketballGames[$i]["awayTeamScore"] ?>
        </div>
    <?php } ?>
</body>
</html>