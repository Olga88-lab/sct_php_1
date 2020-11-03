<?php
    $name = 'Текстовая переменная';
    $index = 'index.php';
    $pages1 = '1.php';
    $pages2 = '2.php';
    $pages3 = '3.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $name ?></title>
</head>
<body>
<? echo "<h2> $name </h2>";?>
<?php
    $a = (int)" 456 ghjl";
    $b = (int)" 969294233720368754775807 hfjl";
    $f = 'Текстовая переменная ' . $a;
    $f1 = 'Текстовая переменная ' . $b;
?>
    <h3><?= $f ?> </h3>
    <h3><?= $f1 ?> </h3>
</body>
<ul>
    <li><a href="<?= $index ?>">Перейти на главную страницу</a><br></li>
    <li><a href="<?= $pages1 ?>">Перейти на 1-ю страницу</a><br></li>
    <li><a href="<?= $pages2 ?>">Перейти на 2-ю страницу</a></li>
    <li><a href="<?= $pages3 ?>">Перейти на 3-ю страницу</a></li>
</ul>
</body>
</html>


