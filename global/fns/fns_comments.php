<?php
/**
 * Функция добавляет комментарий в базу.
 * @param string $name - Имя пользователя.
 * @param string $text - Текст отзыва.
 */
function setComments($name, $text) {
  // Экранируем специальные символы.
  $name = my_string($name);
  $text = my_string($text);
  $time = time();

  // Вставляем данные в базу.
  my_query("insert into comment (name, text, time) values ('{$name}', '{$text}', '{$time}')");
}

/**
 * Функция получает отзывы из базы.
 * @return array|null Возвращает ассоциативный массив, и null - если в базе нет отзывов.
 */
function getComments() {
  // Делаем запрос в базу.
  $conn = my_query("select * from comment");
  // Получаем ассоциативный массив комментариев и возвращаем его.
  return mysqli_fetch_all($conn, MYSQLI_ASSOC);
}