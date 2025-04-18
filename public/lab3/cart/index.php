<?php
session_start();

if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];
if (!isset($_COOKIE['previous_cart'])) $_COOKIE['previous_cart'] = '';

if (isset($_POST['item'])) {
    $_SESSION['cart'][] = $_POST['item'];

    // Додаємо в cookie
    $prev = isset($_COOKIE['previous_cart']) ? explode(',', $_COOKIE['previous_cart']) : [];
    $prev[] = $_POST['item'];
    setcookie('previous_cart', implode(',', $prev), time() + (30 * 24 * 60 * 60)); // 30 днів
}

?>

<h3>Додати товар</h3>
<form method="post">
    <input type="text" name="item" placeholder="Назва товару">
    <button type="submit">Додати</button>
</form>

<h4>Поточна корзина (сесія):</h4>
<ul>
    <?php foreach ($_SESSION['cart'] as $item) echo "<li>$item</li>"; ?>
</ul>

<h4>Попередні покупки (cookie):</h4>
<ul>
    <?php
    $prevItems = isset($_COOKIE['previous_cart']) ? explode(',', $_COOKIE['previous_cart']) : [];
    foreach ($prevItems as $item) echo "<li>$item</li>";
    ?>
</ul>
