<html>
<body>
<?php
function chisla($a, $b) {
    if($a===$b) {
        echo 'Вы ввели одинаковые числа!';
        return;
    }
    $arr=range($a, $b);
    sort($arr);
    echo implode(' ', $arr);
}
chisla(21,21);
?>
</body>
</html>