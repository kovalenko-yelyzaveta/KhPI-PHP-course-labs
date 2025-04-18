<?php ?>
<!DOCTYPE html>
<html lang="uk">
<head>
  <meta charset="UTF-8">
  <title>Завантаження файлів та робота з текстом</title>
</head>
<body>

  <h2>Завантаження файлу</h2>
  <form action="process.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="Завантажити">
  </form>

  <h2>Запис тексту у файл</h2>
  <form action="text.php" method="POST">
    <textarea name="text" rows="5" cols="40" placeholder="Введіть текст..."></textarea><br>
    <input type="submit" value="Записати текст">
  </form>

  <h2>Список файлів</h2>
  <a href="list.php">Переглянути всі файли</a>

</body>
</html>