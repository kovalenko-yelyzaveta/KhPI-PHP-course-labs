<?php
// 1. Виведення "Hello, World!"
echo "Hello, World!<br>"; // Виводимо простий текст на екран

// 2. Змінні та типи даних
$string = "Це рядок"; // Змінна типу рядок
$integer = 42;        // Змінна типу ціле число
$float = 2.15;        // Змінна типу число з плаваючою комою
$boolean = true;      // Змінна типу булеве значення

echo "<br><strong>Значення змінних:</strong><br>";
echo $string . "<br>";
echo $integer . "<br>";
echo $float . "<br>";
echo $boolean . "<br>"; // Виводить 1 для true, нічого для false

echo "<br><strong>Типи змінних:</strong><br>";
var_dump($string);
echo "<br>";
var_dump($integer);
echo "<br>";
var_dump($float);
echo "<br>";
var_dump($boolean);
echo "<br>";

// 3. Конкатенація рядків
$firstName = "Іван";
$lastName = "Петренко";
$fullName = $firstName . " " . $lastName; // Об’єднання рядків

echo "<br><strong>Повне ім’я:</strong> " . $fullName . "<br>";

// 4. Умовні конструкції
$number = 7;

echo "<br><strong>Умова:</strong><br>";
if ($number % 2 == 0) {
    echo "$number — парне число.<br>";
} else {
    echo "$number — непарне число.<br>";
}

// 5. Цикли
echo "<br><strong>Цикл for (від 1 до 10):</strong><br>";
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}

echo "<br><strong>Цикл while (від 10 до 1):</strong><br>";
$j = 10;
while ($j >= 1) {
    echo $j . " ";
    $j--;
}

// 6. Масиви
echo "<br><br><strong>Асоціативний масив студента:</strong><br>";
$student = [
    "Ім'я" => "Олена",
    "Прізвище" => "Іваненко",
    "Вік" => 20,
    "Спеціальність" => "Інформатика"
];

foreach ($student as $key => $value) {
    echo "$key: $value<br>";
}

// Додавання нового елементу — середній бал
$student["Середній бал"] = 93.5;

echo "<br><strong>Оновлений масив:</strong><br>";
foreach ($student as $key => $value) {
    echo "$key: $value<br>";
}
?>
