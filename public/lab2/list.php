<?php
$uploadDir = 'uploads/';

echo "<h2>Список файлів у директорії uploads:</h2>";

if (file_exists($uploadDir)) {
    $files = array_diff(scandir($uploadDir), ['.', '..']);

    if (count($files) > 0) {
        echo "<ul>";
        foreach ($files as $file) {
            $filePath = $uploadDir . $file;
            echo "<li><a href='$filePath' download>$file</a></li>";
        }
        echo "</ul>";
    } else {
        echo "У папці uploads немає файлів.";
    }
} else {
    echo "Папка uploads не існує.";
}
?>
