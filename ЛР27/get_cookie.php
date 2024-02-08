<?php
// Проверяем, существует ли cookie с именем "my_cookie"
if(isset($_COOKIE['my_cookie'])) {
    // Если существует, выводим значение cookie
    $cookie_value = $_COOKIE['my_cookie'];
    echo "Значение cookie: " . $cookie_value;
} else {
    // Если не существует, выводим сообщение об отсутствии cookie
    echo "Cookie не найдена.";
}
