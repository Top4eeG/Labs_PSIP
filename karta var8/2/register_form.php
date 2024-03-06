<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма регистрации</title>
</head>
<body>
<h2>Форма регистрации</h2>
<form action="register_process.php" method="post">
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="password">Пароль:</label><br>
    <input type="password" id="password" name="password" required><br><br>

    <label for="username">Имя пользователя:</label><br>
    <input type="text" id="username" name="username" required><br><br>

    <input type="submit" value="Зарегистрироваться">
</form>
</body>
</html>