<?php
// Задание 1: Запись и отображение куки
if (!isset($_COOKIE['test'])) {
    setcookie('test', '123', time() + 3600, '/');
    echo "Куки 'test' установлено!";
} else {
    echo "Куки 'test' содержит: " . $_COOKIE['test'];
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пример работы с куками</title>
</head>
<body>
<!-- Ваш HTML контент здесь -->
</body>
</html>
