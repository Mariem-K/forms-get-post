<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>O'ssurance</title>
	</head>
	<body>
		<?php

		// 1. Créer les variables qui vont contenir les informations du client.
		// 2. Ecrire le script qui permet de déterminer à quel palier peut prétendre un client, selon ses informations (et donc à quel couleur de tarif).
		// 3. Afficher le résultat, par ex. "Votre client a droit au tarif Vert".
		// 4. Afficher le résultat de trois manières différentes : via `if`, `switch` et `array()`.

		?>

		<h1>O'ssurance</h1>
        <h2>Calcul du tarif de votre client</h2>
        
        <?php
            require 'functions.php';

            if(isset($_POST['age'])) {
                $age = $_POST['age'];
            } else {
                $age = null;
            }

            $anneesPermis = filter_input(INPUT_POST, 'anneesPermis');
            $accidents = filter_input(INPUT_POST, 'accidents');
            $anciennete = filter_input(INPUT_POST, 'anciennete');

            // Calcul du palier selon les 4 valeurs du formulaires si elles ne sont pas nulles
            if ($age !== null && $anneesPermis !== null && $accidents !== null && $anciennete !== null) {
                // On appelle la fonction calculPalier déclarée dans functions.php
                // On lui donne en argument les valeurs qui se trouvent dans nos 4 variables
                // calculDuPalier() retourne un entier qui représente un palier
                // On récupère cet entier et on le met dans $palier
                // L'affichage du tarif selon $palier reste le même qu'avant
                $palier = calculDuPalier($age, $anneesPermis, $accidents, $anciennete); ?>

            <p>Votre client à droit au tarif <strong>
            <?php
                if ($palier <= 0) {
                    echo 'Refusé';
                } elseif ($palier == 1) {
                    echo 'Rouge';
                } elseif ($palier == 2) {
                    echo 'Orange';
                } elseif ($palier == 3) {
                    echo 'Vert';
                } else {
                    echo 'Bleu';
                } ?></strong></p>
            <?php } ?>

        <form method="post">
			<!-- emmet : (div>(label+input:number))*4 -->
			<div>
                <label for="age">Âge</label>
                <input type="number" name="age" id="age">
			</div>
			<div>
                <label for="anneesPermis">Années de permis</label>
                <input type="number" name="anneesPermis" id="anneesPermis">
			</div>
			<div>
                <label for="accidents">Nombre d'accidents reponsables</label>
                <input type="number" name="accidents" id="accidents">
			</div>
			<div>
                <label for="anciennete">Années chez son assureur</label>
                <input type="number" name="anciennete" id="anciennete">
			</div>
			<button type="submit">Envoyer</button>
		</form>

	</body>
</html>