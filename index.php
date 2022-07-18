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
    echo 'Ilość znaków przed przetworzeniem: '.strlen($web).'<br>';
    echo $web;
    $textStripTags = strip_tags($web, 'div, p');
    // $textStripTags = str_replace('/\<div\>\<\/div\>/', '/\<br\>/', $web);
    echo 'Ilość znaków po przetworzeniu '.strlen($textStripTags).'<br>';
    echo "<p>$textStripTags</p>";
    // $textStripTagsDiv = strip_tags($web, ['div']);
    // $textStripTagsLi = strip_tags($web, ['li']);
    // $textStripTagsA = strip_tags($web, ['a']);


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