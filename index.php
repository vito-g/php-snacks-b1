<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP-Snaks-B1</title>
  </head>
  <body>

    <?php

      $matchOne = [
        'homeTeam' => 'De\'Longhi Treviso',
        'awayTeam' => 'Dolomiti Energia Trentino',
        'homeTeamScore' => 16,
        'awayTeamScore' => 12
      ];


      $matchTwo = [
        'homeTeam' => 'Virtus Roma',
        'awayTeam' => 'Fortitudo Lavoropiù Bologna',
        'homeTeamScore' => 0,
        'awayTeamScore' => 14
      ];

      $matchThree = [
        'homeTeam' => 'Openjobmetis Varese',
        'awayTeam' => 'Germani Brescia',
        'homeTeamScore' => 10,
        'awayTeamScore' => 16
      ];

      $matchFour = [
        'homeTeam' => 'UNAHOTELS Reggio Emilia',
        'awayTeam' => 'A|X Armani Exchange Milano',
        'homeTeamScore' => 14,
        'awayTeamScore' => 30
      ];

      var_dump($matchOne);
      echo '<br>' . '<br>';
      $allMatchesDaily = [];

      array_push($allMatchesDaily, $matchOne, $matchTwo, $matchThree, $matchFour );
      var_dump($allMatchesDaily);
      echo '<br>' . '<br>';
      //Funziona:
      echo $matchOne['homeTeam'] . '-' . $matchOne['awayTeam'] . ' ' . '|' . ' ' . $matchOne['homeTeamScore'] . '-' . $matchOne['awayTeamScore'];
    





    ?>

  </body>
</html>
