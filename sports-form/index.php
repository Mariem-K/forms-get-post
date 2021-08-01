<?php
require 'functions.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>O'clock United</title>
    </head>
    <body>

        <h1>O'clock United Football Club</h1>
        <h2>Section enfants (de 6 à 14 ans)</h2>

        <!--
            Par défaut, en ne précisant rien dans la balise FORM,
            on envoie les données du formulaires sur la page où est affichée ce formulaire
            et on envoie les données en GET
         -->
         <form>
            <label for="age">Quel est l'âge de votre enfant ?</label>
            <input type="number" name="age" id="age">

            <button type="submit">Envoyer</button>
        </form>
        <?php
        /*

        <?php
        /*
        1.1
        Ajouter un formulaire HTML avec un INPUT "age" permettant d'entrer un entier, et un bouton de type "submit"
        1.2
        Récupérer la valeur de l'âge envoyé grâce au formulaire
        1.3
        écrire le script qui indique la catégorie selon $age:
        "Trop jeune" si moins de 6 ans
        "Poussin" de 6 à 7 ans
        "Pupille" de 8 à 9 ans
        "Minime" de 10 à 11 ans
        "Cadet" après 12 ans
        "Trop âgé" à partir de 15 ans
        */

        if(isset($_GET['age'])) {
            $age = $_GET['age'];

            showCategoryName($age);

            echo '<br>';
            showCategoryNamePlusOneYear($age + 1);
        }
        ?>


    </body>
</html>