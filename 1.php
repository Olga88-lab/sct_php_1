<html>
<body>
<?php
$a=0;
function test()
{
    global $a, $text;
    if (($a+1) == 1) {
        $text = ' раз';
    } elseif (($a+1)  >= 2 && ($a+1) <= 4) {
        $text = ' раза';
    } else if (($a+1) >= 5 && ($a+1)< 22) {
        $text = ' раз';
    }
    return ++$a;
}
echo 'Вызов функции произведен: '.test(). $text.' <br>';
echo 'Вызов функции произведен: '.test(). $text.' <br>';
echo 'Вызов функции произведен: '.test(). $text.' <br>';
?>
</body>
</html>