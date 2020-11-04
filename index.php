<?php
    $title = 'Главная страница';
    $page = 0;
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
        <li><?php if ($page == 0) {?>
            <b><?php } ?><a href= "index.php">Главная страница</a>
                <?php if ($page == 0) {?>
            </b><?php } ?></li>
        <li><?php if ($page == 1) {?>
            <b><a<?php } ?><a href= "1.php">Перейти на 1-ю страницу</a>
        <?php if ($page == 1) {?></ul>
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