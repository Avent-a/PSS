<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обратный отсчет до дня рождения</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .message {
            font-size: 18px;
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            font-size: 16px;
            display: block;
            margin-bottom: 10px;
        }
        input[type="date"] {
            width: 90%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 10px;
        }
        button {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $birthday = strtotime($_POST['birthday']);
            $current_date = strtotime(date('Y-m-d'));
            $days_until_birthday = ($birthday - $current_date) / (60 * 60 * 24);

            echo '<div class="message">';
            if ($days_until_birthday > 0) {
                echo("До вашего дня рождения: $days_until_birthday дней.");
            } elseif ($days_until_birthday === 0) {
                echo("С днем рождения!");
            } else {
                echo("Ваш день рождения уже прошел.");
            }
            echo '</div>';
        }
        ?>
        <form method="POST">
            <label for="birthday">Введите вашу дату рождения:</label>
            <input type="date" id="birthday" name="birthday">
            <button type="submit">Отправить</button>
        </form>
    </div>
</body>
</html>
