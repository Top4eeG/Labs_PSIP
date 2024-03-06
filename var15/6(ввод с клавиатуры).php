<?php
// Определение пользовательской функции
function customCalculation($x, $a, $b, $c) {
    // Проверка деления на ноль
    $denominator = $a * pow($x, 2) + $b * $x + $c;
    if ($denominator == 0) {
        return "Ошибка: знаменатель равен нулю.";
    }

    // Вычисление значения по формуле
    $result = 1 / (sqrt($a * pow($x, 2) + $b * $x + $c));
    return $result;
}

// Чтение значений с клавиатуры
echo "Введите значение x: ";
$x = (float)fgets(STDIN);

echo "Введите значение a: ";
$a = (float)fgets(STDIN);

echo "Введите значение b: ";
$b = (float)fgets(STDIN);

echo "Введите значение c: ";
$c = (float)fgets(STDIN);

// Вызов пользовательской функции и вывод результата
$result = customCalculation($x, $a, $b, $c);
echo "Результат расчета: " . $result;
?>