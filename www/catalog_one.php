<?php
header("Content-type: text/html; charset=utf-8");

// Поключаем файлы конфигурации и функции.
include __DIR__ . "/../global/config.php";
include GLOBAL_DIR . "fns/fns_db.php";
include GLOBAL_DIR . "fns/fns_catalog.php";

// Получаем информацию о товаре из базы.
$arrProduct = getProduct($_GET['id']);

// Получаем список фотографий данного товара.
$arrProductImg = getProductImg($arrProduct['id_prod']);

// Подключаем html страницу галлереи.
include TEMPLATE_DIR . "catalog_one.php";