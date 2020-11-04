<?php
    $name = 'Числа в порядке возрастания';
    $page = 2;
?>
<!DOCTYPE html>
<html>
<head>
    <title><?= $name ?></title>
</head>
<body>
<? echo "<h2> $name </h2>";?>
<?php
    $a = 44;
    $b = 23;
    if ($a > $b) {
        echo 'Числа по возрастанию: ' . $b . ' ' .$a;
    }
    if ($a < $b) {
        echo 'Числа по возрастанию: ' . $a . ' ' .$b;
    }
    if ($a == $b) {
        echo 'Числа равны';
    }
?>
<ul>
    <li><?php if ($page == 0) {?>
        <b><?php } ?><a href= "index.php">Главная страница</a>
            <?php if ($page == 0) {?>
        </b><?php } ?></li>
    <li><?php if ($page == 1) {?>
        <b><?php } ?><a href= "1.php">Перейти на 1-ю страницу</a>
        <?php if ($page == 1) {?>
            </b><?php } ?></li>
    <li><?php if ($page == 2) {?>
        <b><?php } ?><a href= "2.php">Перейти на 2-ю страницу</a>
        <?php if ($page == 2) {?>
            </b><?php } ?></li>
    <li><?php if ($page == 3) {?>
        <b><?php } ?><a href= "3.php">Перейти на 3-ю страницу</a>
        <?php if ($page == 3) {?>
            </b><?php } ?></li>
</ul>
</body>
</html>


