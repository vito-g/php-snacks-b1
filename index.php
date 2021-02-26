<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP-Snaks-B1-Match</title>
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

      // var_dump($matchOne);
      // echo '<br>' . '<br>';
      $allMatchesDaily = [];

      array_push($allMatchesDaily, $matchOne, $matchTwo, $matchThree, $matchFour );
      // echo  '<strong>' . 'L\'Array di tutti i match di giornata:' . '</strong>' . '<br>';
      // var_dump($allMatchesDaily);
      // echo '<br>' . '<br>';
      //Funziona:
      // echo 'Single Match' . '<br>';
      // echo $matchOne['homeTeam'] . '-' . $matchOne['awayTeam'] . ' ' . '|' . ' ' . $matchOne['homeTeamScore'] . '-' . $matchOne['awayTeamScore'];

      // echo '<br>' . '<br>';
      //Banale Prova di Funzionamento del For
      // for ($i = 0; $i < count($allMatchesDaily); $i++) {
      //   echo $matchOne['homeTeam'] . '-' . $matchOne['awayTeam'] . ' ' . '|' . ' ' . $matchOne['homeTeamScore'] . '-' . $matchOne['awayTeamScore'];
      // }

      // echo '<br>' . '<br>';
      echo '<strong>' . 'Match di giornata' . '</strong>' .'<br>';
      for ($i = 0; $i < count($allMatchesDaily); $i++) {
        echo $allMatchesDaily[$i]['homeTeam'] . ' ' . '-' . ' ' . $allMatchesDaily[$i]['awayTeam'] . ' ' . '|' . ' ' . $allMatchesDaily[$i]['homeTeamScore'] . ' ' . '-' . ' ' . $allMatchesDaily[$i]['awayTeamScore'] . '<br>';
      }





    ?>

  </body>
</html>
