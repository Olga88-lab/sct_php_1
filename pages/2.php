<?php
$img1 = '/img/1.jpg';
$img2 = '/img/2.jpg';
$img3 = '/img/3.jpg';
$img4 = '/img/img1/4.jpg';
$img5 = '/img/img1/5.jpg';
$index = '/index.php';
$pages1 = '1.php';
$pages2 = '2.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Картинки</title>
</head>
<body>
<p>
    <img src="<?= $img1 ?>" width="280" height="189" alt=""></p>
<p>
    <img src="<?= $img2 ?>" width="280" height="189" alt=""></p>
<p>
    <img src="<?= $img3 ?>" width="280" height="189" alt=""></p>
<p>
    <img src="<?= $img4 ?>" width="280" height="189" alt=""></p>
<p>
    <img src="<?= $img5 ?>" width="280" height="189" alt=""></p>
<ul>
    <li><a href="<?= $index ?>">Перейти на главную страницу</a><br></li>
    <li><a href="<?= $pages1 ?>">Перейти на 1-ю страницу</a><br></li>
    <li><a href="<?= $pages2 ?>">Перейти на 2-ю страницу</a></li>
</ul>
</body>
</html>