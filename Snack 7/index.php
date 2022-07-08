<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php 
// Creo l'array contenente gli alunni. Ognuno ha nome, cognome e voti.
$alunni = [
    [
        "nome" => "Pierfrancesco",
        "cognome" => "Frilli",
        "voti" => [
            "italiano" => 8,
            "matematica" => 7,
            "storia" => 5,
            "educazione fisica" => 10
        ]
    ],
    [
        "nome" => "Rocco",
        "cognome" => "Pecora",
        "voti" => [
            "italiano" => 5,
            "matematica" => 3,
            "storia" => 4,
            "educazione fisica" => 10
        ]
    ],
    [
        "nome" => "Franco",
        "cognome" => "Zamanga",
        "voti" => [
            "italiano" => 7,
            "matematica" => 8,
            "storia" => 8,
            "educazione fisica" => 8
        ]
    ],
    [
        "nome" => "Edmundo",
        "cognome" => "Rivas",
        "voti" => [
            "italiano" => 6,
            "matematica" => 6,
            "storia" => 6,
            "educazione fisica" => 10
        ]
    ],
    [
        "nome" => "Orlando",
        "cognome" => "Sebastiani",
        "voti" => [
            "italiano" => 9,
            "matematica" => 9,
            "storia" => 8,
            "educazione fisica" => 7
        ]
    ]
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>
<body>
    <?php for($i = 0; $i < count($alunni); $i++) { ?>
        <div>
            <?php echo $alunni[$i]["nome"] . " " . $alunni[$i]["cognome"] . " | Media: " . (array_sum($alunni[$i]["voti"]) / count($alunni[$i]["voti"])) ?>
        </div>
    <?php } ?>
</body>
</html>