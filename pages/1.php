<?php
$login = 'Максим Дмитриевич Николаев';
$text1 = 'Пол: муж. ';
$text2 = 'Возраст: 45 лет';
$text3 = 'Адрес по прописке: г. Санкт-Петербург, ул. Ленина, дом. 12, кв. 154';
$text4 = 'Адрес фактического места жительства: г. Санкт-петербург, ул. Петрозаводская, дом. 4, кв. 63';
$index = '/index.php';
$pages1 = '1.php';
$pages2 = '2.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sample page</title>
</head>
<body>
 <h1> Персональные данные: </h1>
 <h2> <?= $login ?> </h2>
 <h3> <?= $text1 . $text2 ?> </h3>
 <h3> <?= $text3 ?> </h3>
 <h3> <?= $text4 ?> </h3>
 <ul>
     <li><a href="<?= $index ?>">Перейти на главную страницу</a><br></li>
     <li><a href="<?= $pages1 ?>">Перейти на 1-ю страницу</a><br></li>
     <li><a href="<?= $pages2 ?>">Перейти на 2-ю страницу</a></li>
 </ul>
</body>
</html>