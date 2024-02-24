<?php
// Задание 2: Удаление куки
setcookie('test', '', time() - 3600, '/');
echo "Куки 'test' удалено.";
?>
