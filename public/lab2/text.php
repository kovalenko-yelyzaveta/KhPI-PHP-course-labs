<?php
$logFile = 'log.txt';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $text = trim($_POST['text'] ?? '');

    if (!empty($text)) {
        file_put_contents($logFile, $text . PHP_EOL, FILE_APPEND);
        echo "Текст успішно записано у файл.<br>";
    } else {
        echo "Будь ласка, введіть текст.<br>";
    }
}

echo "<h3>Вміст log.txt:</h3>";

if (file_exists($logFile)) {
    $content = nl2br(file_get_contents($logFile));
    echo "<div style='white-space: pre-wrap;'>$content</div>";
} else {
    echo "Файл log.txt ще не створений.";
}
?>
