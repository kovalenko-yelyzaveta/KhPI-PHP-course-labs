<?php
session_start();

$timeout = 300; // 5 хвилин

if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $timeout) {
    session_unset();
    session_destroy();
    echo "<p>Сесію завершено через неактивність.</p>";
} else {
    $_SESSION['last_activity'] = time();
}

if (!isset($_SESSION['logged'])) {
    $_SESSION['logged'] = true;
    echo "<p>Ви увійшли! Час активності оновлено.</p>";
} else {
    echo "<p>Ваша сесія активна.</p>";
}
?>
