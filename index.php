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
    // echo $web.'<br>';
    $head = get_headers('https://pl.wikipedia.org/wiki/Miasta_w_Polsce#Lista_miast_w_Polsce_w_porz%C4%85dku_alfabetycznym');
    // print_r($head);
    // $textHead = strip_tags($head);
    // $headTrim = trim($textHead);
    var_dump($head);
    $textStripTagsHead = trim($web, (print_r($head)));
    // echo $textStripTagsHead;
    $textStripTags = strip_tags($textStripTagsHead, ['p','li','br']);
    echo '<h2>Ilość znaków po przetworzeniu '. strlen($textStripTags) . '</h2><br>';
    // $textStripTags = str_replace('/\<div\>\<\/div\>/', '/\<br\>/', $web);
    echo "<p>$textStripTags</p><br>";

    // if (preg_match($aTab, $textStripTagsA)) {
    //   $textStrReplaceA = str_replace($aTab, $brake, $textStripTagsA);
    // }
    // echo "<p>$textDiv</p>";
    // echo "<p>$textStrReplaceA</p>";
    // $textStripTags = strip_tags($textStrReplaceA);
    // echo "<p>$textStripTagsDiv</p>";
  ?>
</body>
</html>