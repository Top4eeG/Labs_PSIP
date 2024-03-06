<?php
// Создаем переменные $a и $b
$a = 59;
$b = 7;

// Вычисляем частное и произведение
$division = $a / $b;
$multiplication = $a * $b;

// Открываем файл для записи
$filename = '1.txt';
$file = fopen($filename, 'w');

// Проверяем, получилось ли открыть файл
if ($file) {
    // Записываем результаты в файл
    fwrite($file, "Частное: $division\r\n");
    fwrite($file, "Произведение: $multiplication\r\n");

    // Закрываем файл
    fclose($file);

    echo "Результаты записаны в файл $filename";
} else {
    echo "Ошибка при открытии файла $filename для записи";
}
?>