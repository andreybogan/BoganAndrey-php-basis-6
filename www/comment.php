<?php
header("Content-type: text/html; charset=utf-8");

// Поключаем файлы конфигурации и функции.
include __DIR__ . "/../global/config.php";
include GLOBAL_DIR . "fns/fns_db.php";

// Если была нажата кнопка Добавить фото, то обрабатываем его.
if (@$_REQUEST['calcFirst[submitFirst]']) {

}

// Подключаем html страницу галлереи.
include TEMPLATE_DIR . "calculator.php";