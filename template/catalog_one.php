<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $arrProduct['name'] ?></title>
</head>
<body>
  <a href="catalog.php">Вернуться в каталог товаров.</a>

  <h1><?= $arrProduct['name'] ?></h1>
  <p><?= $arrProduct['text'] ?></p>
  <p>Цена: <?= $arrProduct['price'] ?></p>

  <?php foreach ($arrProductImg as $value): ?>
    <a href="./images/big/<?= $value['img'] ?>" target="_blank">
      <img src="./images/small/<?= $value['img'] ?>" alt="">
    </a>
  <?php endforeach; ?>

</body>
</html>