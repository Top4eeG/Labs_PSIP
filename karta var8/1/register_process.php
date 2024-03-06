<?php
// Проверяем, была ли отправлена форма методом POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $email = $_POST["email"];
    $password = $_POST["password"];
    $username = $_POST["username"];

    // Выводим полученные данные
    echo "<h2>Данные, полученные из формы:</h2>";
    echo "Email: " . $email . "<br>";
    echo "Пароль: " . $password . "<br>";
    echo "Имя пользователя: " . $username . "<br>";
} else {
    // Если форма не была отправлена методом POST, выдаем сообщение об ошибке
    echo "Ошибка: форма не была отправлена.";
}
?>