<!DOCTYPE html>
<html lang=de>
<head>
  <title> PHP Würfelergebnisse</title>
  <meta charset=utf-8>
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
foreach ($zeilen as $zeile) {foreach ($zeile as $zahl) {
echo $zahl . ' ';
}
echo '<br>';
}
?>
</body>
</html>