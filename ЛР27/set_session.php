<?php
session_start();
$a = "Привет, мир!";
$_SESSION['a'] = 3;
echo "Значение переменной \$a установлено в сессию.";

