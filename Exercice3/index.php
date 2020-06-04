<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>

<body>
    <h1>Exercice 3</h1>
    <p>Créer deux variables age et gender. La variable gender peut prendre comme valeur :<br>
        Homme<br>
        Femme<br>
        En fonction de l'âge et du genre afficher la phrase correspondante :<br>
        Vous êtes un homme et vous êtes majeur<br>
        Vous êtes un homme et vous êtes mineur<br>
        Vous êtes une femme et vous êtes majeure<br>
        Vous êtes une femme et vous êtes mineur<br>

        Gérer tous les cas. </p>

<?php

    $gender='Femme';
    $age = 20;


    if ($gender == 'Homme' && $age >= 18) {
        echo 'Vous êtes un homme et vous êtes majeur';
    } elseif ($gender == "Homme" && $age <= 18) {
        echo 'Vous êtes un homme et vous êtes mineur';
    } elseif ($gender == "Femme" && $age >= 18) {
        echo 'Vous êtes une femme et vous êtes majeure';
    } elseif ($gender == 'Femme' && $age <= 18) {
        echo 'Vous êtes une femme et vous êtes mineur';
    }
    

?>
</body>

</html>