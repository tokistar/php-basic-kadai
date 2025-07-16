<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>課題12章 連想配列</title>
</head>
<body>
  <p>
    <?php
    $product_data = ['name' => '玉ねぎ', 'price' => 200, 'production area' => '北海道'];
    $key_translation = ['name' => '名前', 'price' => '値段', 'production area' => '産地'];

    foreach ($product_data as $key => $value) {
      $japanese_key = $key_translation[$key];
      echo "{$japanese_key} : {$value}<br>";
    }
    ?>
  </p>
</body>
</html>