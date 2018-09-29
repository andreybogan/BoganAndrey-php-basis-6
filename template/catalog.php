<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Каталог товаров</title>
  <link rel="stylesheet" href="./global/css/style.css">
</head>
<body>
  <h1>Каталог товаров</h1>

  <div class="catalog">

    <?php foreach ($arrCatalog as $value): ?>
      <div class="item">
        <a href="catalog_one.php?id=<?= $value['id_prod'] ?>">
          <img src="./images/small/<?= $value['img'] ?>" alt="">
        </a>
        <a href="catalog_one.php?id=<?= $value['id_prod'] ?>">
          <p><?= $value['name'] ?></p>
        </a>
        <p>Цена <?= $value['price'] ?> руб.</p>
      </div>
    <?php endforeach; ?>

  </div>

</body>
</html>