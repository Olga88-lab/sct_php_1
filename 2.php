<html>
<body>
<?php
    function getResult ($d = 'Произведение', $a = 32, $b = 8)
{
    if ($d == 'Сумма') {
        echo  $getResult = $a + $b;
    } elseif ($d == 'Разность') {
        echo  $getResult = $a - $b;
    } elseif ($d == 'Произведение') {
        echo  $getResult = $a * $b;
    } elseif ($d == 'Частное') {
        echo  $getResult = $a / $b;
    }
    echo " {$d} {$a} и {$b}";
}
    getResult()
?>
</body>
</html>