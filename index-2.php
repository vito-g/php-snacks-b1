<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP-Snaks-B1-Validation</title>
  </head>
  <body>


    <?php

      $name = $_GET['name'];
      $email = $_GET['email'];
      $age = $_GET['age'];
      $occurrencyOne = '@';
      $occurrencyTwo = '.';

      if (((strpos($email, $occurrencyOne) !== false) && (strpos($email, $occurrencyTwo) !== false)) && (is_numeric($age)) && (strlen($name) > 3)) {
      echo "Accesso riuscito!";
      } else {
        echo "Accesso negato!";
      }

    ?>


  </body>
</html>
