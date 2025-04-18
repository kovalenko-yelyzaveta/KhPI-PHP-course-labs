<?php
session_start();
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = md5($_POST["password"]);

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && $user["password"] === $password) {
        $_SESSION["user"] = $user["username"];
        header("Location: welcome.php");
        exit;
    } else {
        echo "Невірне ім’я користувача або пароль.";
    }
}
?>

<h2>Вхід</h2>
<form method="post">
    Ім’я користувача: <input type="text" name="username" required><br><br>
    Пароль: <input type="password" name="password" required><br><br>
    <button type="submit">Увійти</button>
</form>
