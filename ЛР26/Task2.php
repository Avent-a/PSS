<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список файлов в каталоге</title>
    <style>
        /* Стили для отображения файлов с определенными расширениями */
        .php {
            color: green;
        }
        .txt {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Список файлов в каталоге</h1>
    <ul>
        <?php
        // Указываем путь к каталогу
        $directory = './';

        // Получаем список файлов в каталоге
        $files = scandir($directory);

        // Перебираем файлы
        foreach ($files as $file) {
            // Игнорируем текущий и родительский каталоги
            if ($file == '.' || $file == '..') {
                continue;
            }

            // Выводим имя файла
            echo '<li>';

            // Выводим имя файла
            echo $file;

            // Проверяем расширение файла
            $file_extension = pathinfo($file, PATHINFO_EXTENSION);
            switch ($file_extension) {
                case 'php':
                    echo ' <span class="php">(PHP)</span>';
                    break;
                case 'txt':
                    // Читаем первые 30 символов из файла
                    $content = file_get_contents($directory . '/' . $file, NULL, NULL, 0, 30);
                    echo ' <span class="txt">(' . $content . '...)</span>';
                    break;
                case 'gif':
                case 'jpg':
                case 'bmp':
                    echo ' <span>(Картинка)</span>';
                    break;
                default:
                    break;
            }

            echo '</li>';
        }
        ?>
    </ul>
</body>
</html>
