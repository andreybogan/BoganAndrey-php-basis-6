<?php
header("Content-type: text/html; charset=utf-8");

// Поключаем файлы конфигурации и функции.
include __DIR__ . "/../global/config.php";
include GLOBAL_DIR . "fns/fns_db.php";
include GLOBAL_DIR . "fns/fns_catalog.php";

// Получаем массив товаров из базы.
$arrCatalog = getCatalog();

// Подключаем html страницу галлереи.
include TEMPLATE_DIR . "catalog.php";