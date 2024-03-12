<?php
// Цена за одну тетрадь и одну обложку
$price_per_notebook = 2.50;
$price_per_cover = 1.00;

// Количество тетрадей и обложек
$number_of_notebooks = 5;
$number_of_covers = 5;

// Вычисляем стоимость покупки
$total_cost = ($price_per_notebook * $number_of_notebooks) + ($price_per_cover * $number_of_covers);

// Выводим результат на экран
echo "Итоговая стоимость покупки: $" . number_format($total_cost, 2);
?>