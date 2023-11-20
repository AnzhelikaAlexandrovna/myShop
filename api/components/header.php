<?php
  require_once('path.php');
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Интернет-магазин товаров для дома</title>
    <link href="<?= path('css/style.css') ?>" rel="stylesheet">
    <link type="text/css" href="<?= path('css/style.php') ?>" rel="stylesheet">
</head>
<body>
  <header class="site-header">
    <nav class="site-navigation">
      <a class="logo-link" href="/api/index.php">
        <img src="<?= path('img/logo-full.svg') ?>" width="62" height="17" alt="Логотип магазина gloevk">
      </a>
      <ul class="navigation-list">
        <li><a href="/api/catalog.php">Каталог</a></li>
        <li><a href="/api/delivery.php">Доставка</a></li>
        <li><a href="/api/contacts.php">Контакты</a></li>
        <li><a href="/api/blog.php">Блог</a></li>        </ul>
    </nav>
  </header>
</body>
</html>