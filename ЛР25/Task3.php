<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .male {
            color: blue;
        }

        .female {
            color: pink;
        }

        .education {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
    $peoples = array(
        1 => array('fio' => 'Сонный Антон Петрович', 'age' => 20, 'sex' => 'м', 'education' => 'среднее'),
        2 => array('fio' => 'Павлова Александра Анатольевна', 'age' => 28, 'sex' => 'ж', 'education' => 'высшее'),
        3 => array('fio' => 'Никольский Алексей Николаевич', 'age' => 31, 'sex' => 'м', 'education' => 'высшее'),
        4 => array('fio' => 'Коленкова Анна Серегеевна', 'age' => 20, 'sex' => 'ж', 'education' => 'среднее'),
        5 => array('fio' => 'Питонова Карина Фёдоровна', 'age' => 21, 'sex' => 'ж', 'education' => 'среднее'),
    );
    ?>

    <table>
        <tr>
            <th>ФИО</th>
            <th>Возраст</th>
            <th>Пол</th>
            <th>Образование</th>
        </tr>

        <?php foreach ($peoples as $key => $person): ?>
            <tr>
                <td><?= $person['fio'] ?></td>
                <td><?= $person['age'] ?></td>
                <td class="<?= ($person['sex'] == 'м') ? 'male' : 'female' ?>"><?= $person['sex'] ?></td>
                <td class="<?= ($person['education'] == 'высшее') ? 'education' : '' ?>"><?= $person['education'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
