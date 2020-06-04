<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
</head>
<body>
<h1>Exercice 5</h1>
<p>Traduire ce code avec des if et des else :</p>

<?php 

// echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';

$gender = 'Femme';

if ($gender != 'Homme') {
    echo 'C\'est une développeuse !!!';
} else {
    echo 'C\'est un développeur !!!';
}


?>
</body>
</html>


