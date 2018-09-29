<?php
/**
 * Функция выполняет сложениу двух чисел.
 * @param number $par1 - Первое число.
 * @param number $par2 - Второе число.
 * @return number Сумма первого и второго числа.
 */
function addition($par1, $par2) {
  return $par1 + $par2;
}

/**
 * Функция выполняет выичитание из первого числа второго.
 * @param number $par1 - Первое число.
 * @param number $par2 - Второе число.
 * @return number Результат вычитания из первого числа второго.
 */
function subtraction($par1, $par2) {
  return $par1 - $par2;
}

/**
 * Функция выполняет умножение чисел.
 * @param number $par1 - Первое число.
 * @param number $par2 - Второе число.
 * @return number Результат умножения первого числа на второе.
 */
function multiplication($par1, $par2) {
  return $par1 * $par2;
}

/**
 * Функция выполняет деление первого числа на второе.
 * @param number $par1 - Первое число.
 * @param number $par2 - Второе число.
 * @return number|string Результат деления первого числа на второе.
 */
function division($par1, $par2) {
  if ($par2 == 0) {
    return "Деление на ноль невозможно.";
  }
  return $par1 / $par2;
}

/**
 * Функция выполняет одну из математических операция (+, -, *, /) над двумя заданными числами.
 * @param number $par1 - Первое число.
 * @param number $par2 - Второе число.
 * @param string $operation - Строка с названием операций: +, -, *, /.
 * @return number|string Результат выполнения операций.
 */
function mathOperation($par1, $par2, $operation) {
  switch ($operation) {
    case "+":
      return addition($par1, $par2);
      break;
    case "-":
      return subtraction($par1, $par2);
      break;
    case "*":
      return multiplication($par1, $par2);
      break;
    case "/":
      return division($par1, $par2);
      break;
    default:
      return "Могут использовать только следующие операции: +, -, *, /.";
  }
}