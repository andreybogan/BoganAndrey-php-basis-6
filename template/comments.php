<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Comments</title>
  <link rel="stylesheet" href="./global/css/style.css">
</head>
<body>
  <h1>Отзывы пользователей.</h1>

  <?php
  // Если есть сообщения, то выводим их, иначе выводим сообщение что сообщений нет.
  if (count($arrComment) > 0) {
    foreach ($arrComment as $comments) {
      ?>
      <div class="comment">
        <h3><?= $comments['name'] ?></h3>
        <p><?= $comments['text'] ?></p>
      </div>
      <?php
    }
  } else {
    echo "<p>Вы можете быть первым кто оставит комментарий.</p>";
  }
  ?>

  <hr>
  <form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="post">
    <label for="name">Ваше имя</label>
    <input type="text" id="name" name="name" required>
    <label for="text">Сообщение</label>
    <textarea type="text" id="text" name="text" rows="5" required></textarea>
    <input type="submit" name="submit" class="submit" value="Отправить">
  </form>
</body>
</html>