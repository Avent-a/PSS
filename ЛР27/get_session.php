<?
session_start();
if(isset($_SESSION['a'])) {
    $a = $_SESSION['a'];
    echo "Значение переменной \$a из сессии: " . $a;
} else {
    echo "Переменная \$a не найдена в сессии.";
}
