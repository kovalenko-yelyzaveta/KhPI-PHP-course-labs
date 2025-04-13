<?php
// Перевірка, чи були передані дані методом POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = trim($_POST["fname"]);
    $lname = trim($_POST["lname"]);

    // Перевірка на порожні значення
    if (!empty($fname) && !empty($lname)) {
        echo "Привіт, " . htmlspecialchars($fname) . " " . htmlspecialchars($lname) . "!";
    } else {
        echo "Будь ласка, заповніть всі поля!";
    }
} else {
    echo "Дані не були надіслані методом POST.";
}
?>
  