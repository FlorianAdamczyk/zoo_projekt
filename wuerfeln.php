<!DOCTYPE html>
<html lang=de>

<head>
  <title> PHP Würfelergebnisse</title>
  <meta charset=utf-8>

  <link href="style.css" rel="stylesheet">
  <link href="style_2.css" rel="stylesheet">

</head>

<body>
  <h1>Würfelergebnisse</h1>
  <?php
  $wuerfelergebnisse = array();
  for ($i = 0; $i < 120; $i++) {
    $ergebnis = rand(1, 6);
    $wuerfelergebnisse[] = $ergebnis;
  }
  $zeilen = array_chunk($wuerfelergebnisse, 12);
  foreach ($zeilen as $zeile) {
    foreach ($zeile as $zahl) {
      echo $zahl . ' ';
    }
    echo '<br>';
  }
  echo '<br>';
  $ergebnisCount = array_count_values($wuerfelergebnisse);
  foreach ($ergebnisCount as $zahl => $count) {
    echo "Die Zahl $zahl ist $count Mal gefallen.<br>";
  }
  ?>
  <br><br><br><br><br><br><br><br>
  <br><br><br><br><br><br><br><br>
  <br><br><br><br><br><br><br><br>

  <h4> Impressum </h4>
  <p id="impressum_paragraph">
    <a id="impressum_link">
      <i> <b>coded by: </b> Justin Iglhaut, Iryna Korchynska, Florian Adamczyk </i> <br> <br>
    </a>
    Hosted on Netlify: <a href="https://zooprojekt.netlify.app/"> zooprojekt.netlify.app </a> <br>
    Managed on Github: <a href="https://github.com/FlorianAdamczyk/zoo_projekt">
      github.com/FlorianAdamczyk/zoo_projekt </a> <br>
    <br> &copy; <b>2024</b>
  </p> <!-- Impressum paragraph end. -->

</body>

</html>