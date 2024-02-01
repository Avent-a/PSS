<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Проверка условий</title>
</head>
<body>
    <?php
    $variable = 15;
    
    if ($variable == 10) {
        echo "<p>OK</p>";
    } elseif ($variable > 10) {
        echo "<p>Больше</p>";
    } else {
        echo "<p>Меньше</p>";
    }
    ?>
</body>
</html>
