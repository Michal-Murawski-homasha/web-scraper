<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>scraper</title>
</head>
<body>
  <?php

    $web = file_get_contents('https://pl.wikipedia.org/wiki/Miasta_w_Polsce#Lista_miast_w_Polsce_w_porz%C4%85dku_alfabetycznym');

    echo '<h2>Ilość znaków przed przetworzeniem: '. strlen($web) . '</h2><br>';

    $textStripTags = strip_tags($web, ['p','li','br']);

    echo '<h2>Ilość znaków po przetworzeniu '. strlen($textStripTags) . '</h2><br>';

    echo "<p>$textStripTags</p><br>";

    $doc = new DOMDocument($textStripTags);

    $doc->dormatOutput = true;

    $date = date('YmdHis');
    $text = $doc->createTextNode($textStripTags);

    $formatFile = $date . '.txt';
    $doc->save($date . '.txt');
    echo $date;
    echo $formatFile;
    echo $saveFile;
  ?>
</body>
</html>