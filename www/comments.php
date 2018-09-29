<?php
header("Content-type: text/html; charset=utf-8");

// Поключаем файлы конфигурации и функции.
include __DIR__ . "/../global/config.php";
include GLOBAL_DIR . "fns/fns_db.php";
include GLOBAL_DIR . "fns/fns_comments.php";

// Проверяем была ли нажата кнопка Отправить комментарий.
if ($_REQUEST['submit']) {
  // Добавляем комментарий в базу.
  setComments($_REQUEST['name'], $_REQUEST['text']);
  header("Location: comments.php");
  exit;
}

// Получаем массив комментариев из базы.
$arrComment = getComments();

// Подключаем html страницу галлереи.
include TEMPLATE_DIR . "comments.php";