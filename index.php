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
    $textStripTagsLi = strip_tags($web, ['li']);
    // $textStripTagsDiv = strip_tags($web, ['div']);
    // $textStripTagsA = strip_tags($web, ['a']);

    $star = '*';
    $starAndComma = '*,';
    $brake = '<br>';
    $space = ',';
    $aTab = '<a>';
    $aTabBrake = '<br><a>';
    if (preg_match('/\*,/', $textStripTagsLi))
    {
      $textStrReplaceLi = str_replace($starAndComma, $space, $textStripTagsLi);
    }

    if(preg_match('/\*/', $textStripTagsLi))
    {
      echo str_replace($star, $brake, $textStrReplaceLi);
      echo 'Ilość znaków po przetworzeniu '.strlen($textStrReplaceLi);
    }

    // if (preg_match($aTab, $textStripTagsA)) {
    //   $textStrReplaceA = str_replace($aTab, $brake, $textStripTagsA);
    // }
    // echo "<p>$textDiv</p>";
    // echo "<p>$textStrReplaceA</p>";
    // $textStripTags = strip_tags($textStrReplaceA);
    // echo $textStripTags;
    // echo "<p>$textStripTagsDiv</p>";
  ?>
</body>
</html>