<?php
// Task 3: Visit counter
$visit_count = isset($_COOKIE['visit_count']) ? $_COOKIE['visit_count'] : 0;
$visit_count++;
setcookie('visit_count', $visit_count, time() + 3600, '/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visit Counter</title>
</head>
<body>
<?php
echo "Вы посетили наш сайт $visit_count раз!";
?>
</body>
</html>
