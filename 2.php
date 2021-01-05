<html>
<body>
<?php
function chisla()
{
    $a=0;
    if ($a==0){
        echo $a.' - Число тоже четное<br>';
    }
    while ($a<=10) {
        if ($a%2==0 && $a!=0) {
            echo $a.' - Число четное <br>';
        }
        if ($a%2!=0){
            echo $a.' - Число нечетное <br>';
        }
        $a++;
    }
}
echo chisla();
?>
</body>
</html>