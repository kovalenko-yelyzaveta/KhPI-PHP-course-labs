<?php
if (isset($_POST['name'])) {
    setcookie('username', $_POST['name'], time() + (7 * 24 * 60 * 60)); // 7 днів
    header("Location: index.php");
    exit();
}

if (isset($_POST['delete'])) {
    setcookie('username', '', time() - 3600);
    header("Location: index.php");
    exit();
}
?>

<form method="post">
    <input type="text" name="name" placeholder="Введіть ім'я">
    <button type="submit">Зберегти</button>
</form>

<form method="post">
    <button type="submit" name="delete">Видалити cookie</button>
</form>

<?php
if (isset($_COOKIE['username'])) {
    echo "<p>Привіт, {$_COOKIE['username']}!</p>";
}
?>
