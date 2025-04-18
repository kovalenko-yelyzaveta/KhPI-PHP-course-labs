<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = md5($_POST["password"]); 

    $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    try {
        $stmt->execute([$username, $email, $password]);
        echo "Реєстрація успішна. <a href='login.php'>Увійти</a>";
    } catch (PDOException $e) {
        echo "Помилка: " . $e->getMessage();
    }
}
?>

<h2>Реєстрація</h2>
<form method="post">
    Ім’я користувача: <input type="text" name="username" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Пароль: <input type="password" name="password" required><br><br>
    <button type="submit">Зареєструватися</button>
</form>
