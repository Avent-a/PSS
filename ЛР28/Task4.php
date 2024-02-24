<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обратный отсчет до дня рождения</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        form {
            margin-top: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="date"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-right: 10px;
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .message {
            margin-top: 20px;
            padding: 10px;
            border-radius: 4px;
        }

        .message.success {
            background-color: #dff0d8;
            color: #3c763d;
        }

        .message.error {
            background-color: #f2dede;
            color: #a94442;
        }

        .confetti {
            position: absolute;
            width: 10px;
            height: 10px;
            background-color: #e6b02e;
            border-radius: 50%;
            animation: confetti-fall 6s infinite;
        }

        @keyframes confetti-fall {
            0% {
                transform: translateY(-100vh) rotateZ(0deg);
            }
            100% {
                transform: translateY(100vh) rotateZ(360deg);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Обратный отсчет до дня рождения</h1>
        <?php
        // Задание 4: Обратный отсчет до дня рождения
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['birthday']) && !empty($_POST['birthday'])) {
                $birthday = strtotime($_POST['birthday']);
                $current_date = strtotime(date('Y-m-d'));
                $days_until_birthday = ($birthday - $current_date) / (60 * 60 * 24);

                echo '<div class="message">';
                if ($days_until_birthday > 0) {
                    echo "До вашего дня рождения осталось $days_until_birthday дней. 🤗";
                } elseif ($days_until_birthday === 0) {
                    echo "С днем рождения! 🎊🎉🎁🎈";
                    echo '<div class="confetti"></div>';
                } else {
                    echo "Ваш день рождения уже прошел в этом году. 😭";
                }
                echo '</div>';
            } else {
                echo '<div class="message error">Пожалуйста, введите вашу дату рождения.</div>';
            }
        }
        ?>
        <form method="POST">
            <label for="birthday">Введите вашу дату рождения:</label>
            <input type="date" id="birthday" name="birthday">
            <button type="submit">Отправить</button>
        </form>
    </div>
    <script>
        // Проверяем, совпадает ли день рождения с сегодняшним днем
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['birthday']) && !empty($_POST['birthday'])) {
            $birthday = strtotime($_POST['birthday']);
            $current_date = strtotime(date('Y-m-d'));
            $days_until_birthday = ($birthday - $current_date) / (60 * 60 * 24);
            if ($days_until_birthday === 0) {
                echo 'document.querySelector(".confetti").style.display = "block";';
            }
        }
        ?>
    </script>
</body>
</html>
