<?php

// Ici, on définit les functions dont on a besoin. showCategoryName affiche une catégorie du club selon l'âge. 

function showCategoryName($age) {
    echo getCategoryName($age);
}

function showCategoryNamePlusOneYear($age) {
    echo getCategoryNamePlusOneYear($age);
}

function getCategoryName($age) {
    if ($age < 6) {
        return 'Votre enfant est trop jeune pour rejoindre un club.';
    } elseif ($age <= 7) {
        return 'Votre enfant est dans la catégorie Poussin.';
    } elseif ($age <= 9) {
        return 'Votre enfant est dans la catégorie Pupille.';
    } elseif ($age <= 11) {
        return 'Votre enfant est dans la catégorie Minime.';
    } elseif ($age <= 14) {
        return 'Votre enfant est dans la catégorie Cadet.';
    } else {
        return 'Votre enfant est trop âgé pour rejoindre un club.';
    }
}

function getCategoryNamePlusOneYear($age) {
    if ($age < 6) {
        return 'Dans un an an, votre enfant ne pourra pas encore rejoindre le club.';
    } elseif ($age <= 7) {
        return 'Dans un an, votre enfant sera dans la catégorie Poussin.';
    } elseif ($age <= 9) {
        return 'Dans un an, votre enfant sera dans la catégorie Pupille.';
    } elseif ($age <= 11) {
        return 'Dans un an, votre enfant sera dans la catégorie Minime.';
    } elseif ($age <= 14) {
        return 'Dans un an, votre enfant sera dans la catégorie Cadet.';
    } else {
        return 'Dans un an, votre enfant sera trop âgé pour rejoindre un club.';
    }
}