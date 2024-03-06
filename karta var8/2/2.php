<?php
// Запускаем сессию
session_start();

// Выводим данные из сессии, если они есть
if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
    echo "Email: " . $_SESSION['email'] . "<br>";
    echo "Пароль: " . $_SESSION['password'] . "<br>";
    echo "Имя пользователя: " . $_SESSION['username'] . "<br>";
} else {
    echo "Данные в сессии не найдены.";
}

// Выводим идентификатор сессии
echo "Идентификатор сессии: " . session_id();
?>