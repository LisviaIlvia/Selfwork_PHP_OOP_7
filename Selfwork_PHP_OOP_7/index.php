<?php

require('ironman.php');

// Creazione dell'esercito di Ironman
$esercito = [];
for ($i = 0; $i < rand(1, 20); $i++) { // Crea un numero random di Ironman (tra 1 e 20)
    // Configurazione casuale di ogni Ironman
    $energia = rand(50,200);
    $potenza = rand(30,100);
    
    // Creazione componenti con i valori casuali
    $arcReactor = new ArcReactor($energia);
    $repulsori = new Repulsori($potenza);
    $missili = new Missili();


    // Creazione di un nuovo Ironman
    $esercito[] = new Ironman($arcReactor, $repulsori, $missili);
}

// Visualizza ogni Ironman e la descrizione della sua armatura
foreach ($esercito as $indice => $ironman) {
    echo "Ironman #" . ($indice + 1) . "\n".
    $ironman->descrizione() . "\n".
    $ironman->usaRepulsori() . "\n".
    $ironman->lanciaMissili() . "\n\n";
}

// Mostra il totale degli Ironman creati
echo "Totale Ironman creati: " . Ironman::howManyIronman() . "\n";