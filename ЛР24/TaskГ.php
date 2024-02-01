<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch условия</title>
</head>
<body>
    <?php
    $variable = 15;
    
    switch ($variable) {
        case 10:
            echo "<p>Переменная равна 10</p>";
            break;
        case 20:
            echo "<p>Переменная равна 20</p>";
            break;
        case 30:
            echo "<p>Переменная равна 30</p>";
            break;
        default:
            echo "<p>Ни одно из условий не выполнилось</p>";
    }
    ?>
</body>
</html>
