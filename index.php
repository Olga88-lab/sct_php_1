<?php
    $title = 'Главная страница';
    $index = 'index.php';
    $pages1 = '1.php';
    $pages2 = '2.php';
    $pages3 = '3.php';
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
          <li><a href="<?= $index ?>">Перейти на главную страницу</a><br></li>
          <li><a href="<?= $pages1 ?>">Перейти на 1-ю страницу</a><br></li>
          <li><a href="<?= $pages2 ?>">Перейти на 2-ю страницу</a></li>
          <li><a href="<?= $pages3 ?>">Перейти на 3-ю страницу</a></li>
    </ul>
</body>
</html>