<?php
$uploadDir = 'uploads/';

if (!file_exists($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['file']) && is_uploaded_file($_FILES['file']['tmp_name'])) {
        $file = $_FILES['file'];
        $fileName = basename($file['name']);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        $fileSize = $file['size'];

        $allowedTypes = ['png', 'jpg', 'jpeg'];
        $maxSize = 2 * 1024 * 1024; // 2MB

        if (!in_array(strtolower($fileType), $allowedTypes)) {
            echo "Дозволено тільки зображення (png, jpg, jpeg).";
            exit;
        }

        if ($fileSize > $maxSize) {
            echo "Файл перевищує 2MB.";
            exit;
        }

        $targetFile = $uploadDir . $fileName;

        // Унікальне ім’я, якщо файл вже існує
        if (file_exists($targetFile)) {
            $uniqueName = pathinfo($fileName, PATHINFO_FILENAME) . '_' . time() . '.' . $fileType;
            $targetFile = $uploadDir . $uniqueName;
        }

        if (move_uploaded_file($file['tmp_name'], $targetFile)) {
            $displayName = basename($targetFile);
            echo "Файл успішно завантажено!<br>";
            echo "Ім'я: $displayName <br>";
            echo "Тип: " . mime_content_type($targetFile) . "<br>";
            echo "Розмір: " . round(filesize($targetFile) / 1024, 2) . " КБ<br>";
            echo "<a href='$targetFile' download>Завантажити файл</a><br>";
        } else {
            echo "Помилка при збереженні файлу.";
        }
    } else {
        echo "Файл не було завантажено.";
    }
}
?>
