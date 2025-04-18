<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: ../cookie/index.php");
    exit();
}
?>

<h3>Інформація про запит:</h3>
<ul>
    <li>IP адреса клієнта: <?= $_SERVER['REMOTE_ADDR'] ?></li>
    <li>Браузер: <?= $_SERVER['HTTP_USER_AGENT'] ?></li>
    <li>Скрипт: <?= $_SERVER['PHP_SELF'] ?></li>
    <li>Метод запиту: <?= $_SERVER['REQUEST_METHOD'] ?></li>
    <li>Файл на сервері: <?= $_SERVER['SCRIPT_FILENAME'] ?></li>
</ul>
