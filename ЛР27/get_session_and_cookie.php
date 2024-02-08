<?php
// Начинаем сессию
session_start();

// Читаем значения переменных a, b, c из сессии
$a = $_SESSION['a'];
$b = $_SESSION['b'];
$c = $_SESSION['c'];

// Читаем значения переменных a и b из cookie
if(isset($_COOKIE['a'])) {
    $a_cookie = $_COOKIE['a'];
} else {
    $a_cookie = 'Переменная a в cookie не установлена';
}

if(isset($_COOKIE['b'])) {
    $b_cookie = $_COOKIE['b'];
} else {
    $b_cookie = 'Переменная b в cookie не установлена';
}

echo "Значение переменной a из сессии: $a<br>";
echo "Значение переменной b из сессии: $b<br>";
echo "Значение переменной c из сессии: $c<br>";

echo "Значение переменной a из cookie: $a_cookie<br>";
echo "Значение переменной b из cookie: $b_cookie<br>";

