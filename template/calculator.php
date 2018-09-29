<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Фотоальбом</title>
</head>
<body>
  <h1>Калькулятор 1</h1>

  <form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="POST" style="margin: 24px 0;">
    <input type="text" name="calcFirst[value1]" value="<?= $resultOne['value1'] ?>">
    <select name="calcFirst[operation]">
      <?php
      // Выводим возможные операторы. Используемый оператор становится активным.
      foreach ($resultOne['arrOperation'] as $key => $val) {
        echo $key;
        if ($key == $resultOne['operation']) {
          $select = "selected";
        } else {
          $select = "";
        }
        echo "<option {$select} value='{$key}'>{$val}</option>";
      }
      ?>
    </select>
    <input type="text" name="calcFirst[value2]" value="<?= $resultOne['value2'] ?>">
    <?php
    // Выводим результат.
    if (isset($resultOne['result'])) echo " = " . $resultOne['result'];
    ?>
    <br><br>
    <input type="submit" name="calcFirst[submitFirst]" value="Вычислить">
  </form>

  <h1>Калькулятор 2</h1>

  <form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="POST" style="margin: 24px 0;">
    <input type="text" name="calcSecond[value1]" value="">
    <?php
    // Выводим используемый оператор.
    if (isset($resultTwo['operation'])) echo " " . $resultTwo['operation'] . " ";
    ?>
    <input type="text" name="calcSecond[value2]" value="">
    <?php
    // Выводим результат.
    if (isset($resultTwo['result'])) echo " = " . $resultTwo['result'];
    ?>
    <br><br>
    <input type="submit" name="calcSecond[submitSecond]" value="+">
    <input type="submit" name="calcSecond[submitSecond]" value="-">
    <input type="submit" name="calcSecond[submitSecond]" value="*">
    <input type="submit" name="calcSecond[submitSecond]" value="/">
  </form>
</body>
</html>