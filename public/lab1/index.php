<?php // index.php ?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Форма введення</title>
</head>
<body>
    <h2>Введіть ваші дані</h2>
    <form action="process.php" method="post">
        <label for="fname">Ім'я:</label>
        <input type="text" name="fname" id="fname" required><br><br>

        <label for="lname">Прізвище:</label>
        <input type="text" name="lname" id="lname" required><br><br>

        <input type="submit" value="Відправити">
    </form>
</body>
</html>

