<?php
$title = 'Главная страница';
$pages1 = '/pages/1.php';
$pages2 = '/pages/2.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title> <?= $title ?> </title>
</head>
<body>
    <?php
    echo "<h2> $title </h2>"?>
    <ul>
          <li><a href="<?='index.php'?>">Перейти на главную страницу</a><br></li>
          <li><a href="<?= $pages1 ?>">Перейти на 1-ю страницу</a><br></li>
          <li><a href="<?= $pages2 ?>">Перейти на 2-ю страницу</a></li>
    </ul>
</body>
</html>