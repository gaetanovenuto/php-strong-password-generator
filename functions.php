<?php
$lengthPassword = $_GET['passwLength'] ?? null;

function generatePassw($length) {
    $permittedChar = '0123456789abcdefghijklmnopqrstuvwxyz!@#$%^&*()-_';
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, strlen($permittedChar) - 1);
        $password .= $permittedChar[$randomIndex];
    }

    return $password;

}

if (isset($lengthPassword)) { 
    $lengthPassword = intval($lengthPassword);

    if ($lengthPassword > 0 && $lengthPassword <= 15) {
        $casualPassw = generatePassw($lengthPassword);
        echo "La tua password casuale è: $casualPassw";
    } else {
        echo "La tua password casuale deve avere come lunghezza un numero compreso tra 1 e 15.";
    }
} else {
    echo "Inserisci la lunghezza della password.";
}