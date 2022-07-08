<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
// Salvo il parametro "name"
$name = key_exists("name", $_GET) ? $_GET["name"] : "";
// Salvo il parametro "mail"
$mail = key_exists("mail", $_GET) ? $_GET["mail"] : "";
// Salvo il parametro "age"
$age = key_exists("age", $_GET) ? $_GET["age"] : "";
// Inizializzo una variabile booleana che controlla che i dati siano corretti
$accessGranted = true;

// Se name è minore o uguale a 3 caratteri, nego l'accesso
if(strlen($name) <= 3) {
    $accessGranted = false;
}

// Se mail non contiene un punto e una chiocciola, nego l'accesso
if(!strpos($mail, ".") || !strpos($mail, "@")) {
    $accessGranted = false;
}

// Se age non è un valore numerico, nego l'accesso
if(!is_numeric($age)) {
    $accessGranted = false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- Se dopo i controlli accessGranted è rimasta true, stampo "Accesso riuscito" -->
    <?php if($accessGranted) { ?>
        <div class="alert alert-success" role="alert">
            Accesso riuscito
        </div>
    <!-- Se dopo i controlli accessGranted è diventata false, stampo "Accesso negato" -->
    <?php } else { ?>
        <div class="alert alert-danger" role="alert">
            Accesso negato
        </div>
    <?php } ?>
</body>
</html>