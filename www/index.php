<?php
header("Content-type: text/html; charset=utf-8");

// Поключаем файлы конфигурации и функции.
include __DIR__ . "/../global/config.php";
include GLOBAL_DIR . "fns/fns_calculator.php";

// Инициируем переменные для первого калькулятора.
$resultOne = [
  'value1' => $_REQUEST['calcFirst']['value1'] ?? null,
  'value2' => $_REQUEST['calcFirst']['value2'] ?? null,
  'operation' => $_REQUEST['calcFirst']['operation'] ?? '+',
  'arrOperation' => ['+' => 'Прибавить', '-' => 'Вычесть', '*' => 'Умножить', '/' => 'Разделить'],
];

// Инициируем переменные для второго калькулятора.
$resultTwo = [
  'value1' => $_REQUEST['calcSecond']['value1'] ?? null,
  'value2' => $_REQUEST['calcSecond']['value2'] ?? null,
  'operation' => $_REQUEST['calcSecond']['submitSecond'],
];

// Первый калькулятор. Если была нажата кнопка Рассчитать, то обрабатываем запрос.
if ($_REQUEST['calcFirst']['submitFirst']) {
  // Если данные в числовом формате, то производим вычисления.
  if (is_numeric($resultOne['value1']) && is_numeric($resultOne['value2'])) {
    $resultOne['result'] = mathOperation($resultOne['value1'], $resultOne['value2'], $resultOne['operation']);
  }
}

// Второй калькулятор. Если была нажата кнопка (+, -, * или /), то обрабатываем запрос.
if ($_REQUEST['calcSecond']['submitSecond']) {
  // Если данные в числовом формате, то производим вычисления.
  if (is_numeric($resultTwo['value1']) && is_numeric($resultTwo['value2'])) {
    $resultTwo['result'] = mathOperation($resultTwo['value1'], $resultTwo['value2'], $resultTwo['operation']);
  }
}

// Подключаем html страницу галлереи.
include TEMPLATE_DIR . "calculator.php";