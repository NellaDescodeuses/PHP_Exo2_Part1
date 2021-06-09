<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>PHP Exo_2 Part_1</title>
</head>
<body>
  <div class="container">
    <h1 class="text-danger text-center">## Exercice 2 Partie 1</h1>
    <h2>
      Créez trois variables : nom, prénom, âge. Afficher ces variables dans une phrase(ex: Je m'appelle "nom prénom" et j'ai "âge" ans.)
    </h2>
    <?php
      $firstName = "Pépito";
      $lastName = "Gonzales de la Vega";
      $age = 33;
   ?>
   <p class="text-center mt-4"><?= 'Je m\'appelle ' .$firstName. ' ' .$lastName. 'et j\'ai ' .$age. ' ans.' ?></p>
  </div>
</html>