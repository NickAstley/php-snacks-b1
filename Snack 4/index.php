<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php 
// Creo un array vuoto
$randomNumbers = [];

// Inizio un ciclo che continua fino a che l'array non contiene 15 elementi
while(count($randomNumbers) <15) {
    // Genero un numero casuale da 1 a 100
    $number = random_int(1, 100);
    // Se il numero non esiste nell'array, lo aggiungo
    if (!in_array($number, $randomNumbers)) {
        $randomNumbers[] = $number;
    }
}

// Stampo l'array
var_dump($randomNumbers);
?>