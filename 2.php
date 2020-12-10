<html>
<body>
<?php
$a=0;
function test()
{
    static $a;
    if (($a+1) == 1) {
        $text = ' раз';
    } elseif (($a+1)  >= 2 && ($a+1) <= 4) {
        $text = ' раза';
    } else if (($a+1) >= 5 && ($a+1)< 22) {
        $text = ' раз';
    }
    echo "Вызов функции произведен: " . ++$a . "$text<br>";
}
test();
test();
?>
</body>
</html>