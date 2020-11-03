<?php
    $name = 'Переменные для целочисленное деления';
    $a = 23;
    $b = 7;
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
    $f = 'Частное чисел ' . $a . ' и ' . $b . ' = ';
    $c = $f . floor( $a / $b);
    $f1 = 'Остаток от деления чисел ' . $a . ' и ' . $b . ' = ';
    $d = $f1 . $a % $b;
?>
    <h3><?= $c ?> </h3>
    <h3><?= $d ?> </h3>
</body>
<ul>
    <li><a href="<?= $index ?>">Перейти на главную страницу</a><br></li>
    <li><a href="<?= $pages1 ?>">Перейти на 1-ю страницу</a><br></li>
    <li><a href="<?= $pages2 ?>">Перейти на 2-ю страницу</a></li>
    <li><a href="<?= $pages3 ?>">Перейти на 3-ю страницу</a></li>
</ul>
</body>
</html>

