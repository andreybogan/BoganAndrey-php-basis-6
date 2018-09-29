<?php
// Функция добавляет комментарий в базу.
function setComments($name, $text) {
  // Экранируем специальные символы.
  $name = my_string($name);
  $text = my_string($text);
  $time = time();

  // Вставляем данные в базу.
  my_query("insert into comment (name, text, time) values ('{$name}', '{$text}', '{$time}')");
}

// Функция получает комментарии из базы.
function getComments() {
  // Делаем запрос в базу.
  $conn = my_query("select * from comment");
  // Получаем ассоциативный массив комментариев и возвращаем его.
  return mysqli_fetch_all($conn, MYSQLI_ASSOC);
}