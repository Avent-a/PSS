<?php
// Устанавливаем cookie с именем "my_cookie" и значением "Hello, World!" на один час
setcookie("my_cookie", "Hello, World!", time()+3600);
echo "Cookie установлена.";
