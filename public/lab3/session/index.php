<?php
session_start();

$correct_login = 'admin';
$correct_pass = '1234';

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}

if (isset($_POST['login']) && isset($_POST['password'])) {
    if ($_POST['login'] === $correct_login && $_POST['password'] === $correct_pass) {
        $_SESSION['user'] = $_POST['login'];
    } else {
        echo "<p>Неправильний логін або пароль!</p>";
    }
}

if (isset($_SESSION['user'])) {
    echo "<p>Привіт, {$_SESSION['user']}!</p>";
    echo '<form method="post"><button type="submit" name="logout">Вийти</button></form>';
} else {
?>
    <form method="post">
        <input type="text" name="login" placeholder="Логін">
        <input type="password" name="password" placeholder="Пароль">
        <button type="submit">Увійти</button>
    </form>
<?php
}
?>
