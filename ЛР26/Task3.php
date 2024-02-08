<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Текущая дата и время</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .date {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="date">
            <?php
            // Устанавливаем временную зону
            date_default_timezone_set('Europe/Moscow');

            // Получаем текущую дату
            $current_date = date('d F Yг.');
            echo 'Сегодня ' . $current_date . '<br>';

            $current_date = date('d.m.Yг.');
            echo 'Сегодня ' . $current_date . '<br>';

            $current_date = date('d/m/Y');
            echo 'Сегодня ' . $current_date . '<br>';
            ?>
        </div>

        <div class="time">
            <?php
            // Получаем текущее время
            $current_time = date('H:i:s');
            echo 'Сейчас ' . $current_time . '<br>';

            $current_time = date('H-i');
            echo 'Сейчас ' . $current_time . '<br>';
            ?>
        </div>

        <p>Этот файл адаптирован
            <?php echo date('d.m.Y'); ?>
        </p>
    </div>
</body>

</html>