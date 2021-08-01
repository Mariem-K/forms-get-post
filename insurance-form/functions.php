<?php 

function calculduPalier($age, $anneesPermis, $accidents, $anciennete) {
    // Par défaut, le palier commence à 1.
    $palier = 1;
    // Le nombre d'accidents réduit le nombre de palier
    $palier = $palier - $accidents;
    // Un permis de plus de 2 ans augmente le palier d'un niveau
    if ($anneesPermis > 2) {
        $palier++;
    }
    // Un âge de plus de 25 ans augmente le palier d'un niveau
    if ($age > 25) {
        $palier++;
    }
    // Une ancienneté de plus de 5 ans augmente le palier d'un niveau, si le conducteur n'est pas déjà refusé
    if ($palier > 0 && $anciennete > 5) {
        $palier++;
    }

    return $palier;

}