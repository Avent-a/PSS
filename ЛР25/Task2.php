<?php
// 5. Обрабатываем ассоциативный массив с товарами и ценами
$assortiment = array(
    'Товар1' => 100,
    'Товар2' => 150,
    'Товар3' => 80,
    'Товар4' => 120,
    'Товар5' => 200
);

foreach ($assortiment as $tovar => $price) {
    echo "$tovar: $price руб.<br>";
}

$totalItems = count($assortiment);
$totalPrice = array_sum($assortiment);

echo "Количество товаров: $totalItems<br>";
echo "Суммарная стоимость: $totalPrice руб.<br><br>";

// 6. Сортируем ассоциативный массив по цене
arsort($assortiment);
echo "Отсортированный массив по убыванию цены: ";
foreach ($assortiment as $tovar => $price) {
    echo "$tovar: $price руб., ";
}
echo '<br><br>';

// Сортируем ассоциативный массив по алфавиту
ksort($assortiment);
echo "Отсортированный массив по алфавиту: ";
foreach ($assortiment as $tovar => $price) {
    echo "$tovar: $price руб., ";
}
?>
