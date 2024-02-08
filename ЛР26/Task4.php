<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Подсчет количества лет с 2000 года</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .result {
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Подсчет количества лет с 2000 года</h1>
        <div class="result">
            <?php
            // Получаем текущий год
            $current_year = date('Y');

            // Год, с которого начинаем подсчет
            $start_year = 2000;

            // Подсчитываем количество лет
            $years_passed = $current_year - $start_year;

            // Выводим результат
            echo 'С ' . $start_year . ' года прошло ' . $years_passed . ' лет.';
            ?>
        </div>
    </div>
</body>
</html>
