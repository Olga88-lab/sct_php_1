<!DOCTYPE html>
<html>
<head>
    <title>Sample page</title>
</head>
<body>
    <?php
    echo "<h1>Здравствуй, дорогой читатель, мы рады тебе!</h1>"?>
    <p> <img src="<? echo 'images/1.jpg';?>"
    width="280" height="189" alt=""></p>
    <?php
    echo "<p>Пусть каждое твоё начинание приводит к успеху!</p>"?>
    <p> <img src="<? echo 'images/2.jpg';?>"
    width="280" height="189" alt=""></p>
    <?php
    echo "<p>Верь в себя!</p>"?>
    <p> <img src="<? echo 'images/3.jpg';?>"
    width="280" height="189" alt=""></p>
<a href="<?='index.php'?>">Перейти на главную страницу</a><br>
<a href="<?='1.php'?>">Перейти на 1-ю страницу</a><br>
<a href="<?='2.php'?>">Перейти на 2-ю страницу</a>
</body>
</html>