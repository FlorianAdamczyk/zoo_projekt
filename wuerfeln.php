<!DOCTYPE html>
<html lang=de>

<!-- Dieses Dokument ist dasselbe wie wuerfeln.php, nur dass es in einem anderen Design dargestellt wird. -->

<head>
  <title> PHP Würfelergebnisse</title>
  <meta charset=utf-8>

  <style>
    h1 {
      color: #240750;
    }

    h2 {
      color: #344C64;
    }

    h3 {
      color: #577B8D;
    }

    h4 {
      color: #666666;
    }

    #impressum_paragraph {
      background-color: #828282;
      color: #D1D1D1;
      font-family: sans-serif;
      padding: 10px;
      border-radius: 20px;
    }

    .animal_description_text {
      font-style: italic;

      /* hier wird die Kursivschrift festgelegt */
    }

    .animal_description_text em {
      font-style: normal;
    }

    .animal_description_text b {
      /* ich weiß, das ist nicht die Aufgabe, aber ich möchte nicht, dass meine Unterschrift kursiv ist! */
      font-style: normal;
    }

    /*hier wird die Kursivschrift wieder aufgehoben*/

    body {
      font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
      background-color: #f2f2f2;
      color: #000000;
      /* max-width: 1300px; */
      text-align: left;
      margin-top: 50px;
      margin-right: 2.5%;
      margin-left: 2.5%;
      margin-bottom: 200px;
      padding: 1.5%;
      border-radius: 40px;
    }



    html {
      background: #324040;
    }

    table {
      background-color: #B2C5CF;
      text-align: center;
    }

    .animal_description_table {
      padding: 20px;
      border-radius: 30px;
    }

    .animal_description_table td {
      padding-right: 20px;
    }

    /* Tabellen auf Hauptseite */
    .MainPageTable,
    th {
      border: 1px solid black;
      border-collapse: collapse;
      padding-left: 5px;
      caption-side: bottom;
      padding-right: 5px;
      padding-top: 4px;
      padding-bottom: 4px;
    }

    .MainPageTable td {
      border: 1px solid black;
      border-collapse: collapse;
      padding-left: 5px;
      caption-side: bottom;
      padding-right: 5px;
      padding-top: 4px;
      padding-bottom: 4px;
    }

    .MainPageTable tr:hover {
      background-color: lightblue;
    }

    .MainPageTable thead {
      background-color: #6A8FA3;
      height: 30px;
    }

    /* Gaestebuch eingabefelder */
    input[type=text]:valid {
      background-color: #c8ffc8;
    }

    input[type=text]:invalid {
      background-color: #ffc8c8;
    }

    /* Liste mit Verweisen */
    #toclist {
      list-style: none;
    }

    #toclist a:link {
      text-decoration: none;
      color: #060404;
    }

    #toclist a:visited {
      color: #000000;
    }

    #lageplan {
      align-content: center;
      float: none;
      clear: none;
    }
  </style>

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