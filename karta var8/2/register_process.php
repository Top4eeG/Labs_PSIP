<?php
// Запускаем сессию
session_start();

// Проверяем, была ли отправлена форма методом POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $email = $_POST["email"];
    $password = $_POST["password"];
    $username = $_POST["username"];

    // Сохраняем данные в сессионных переменных
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    $_SESSION['username'] = $username;

    // Перенаправляем пользователя на страницу 2.php
    header("Location: 2.php");
    exit;
} else {
    // Если форма не была отправлена методом POST, выдаем сообщение об ошибке
    echo "Ошибка: форма не была отправлена.";
}
?>