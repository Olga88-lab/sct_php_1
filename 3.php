<html>
<body>
<?php
$a=21;
$b=3;
echo "Температура воздуха = $a °C<br>";
    function up(&$a, $b) {
    $a = $a + $b;
    echo "В течение дня температура изменилась до $a °C поднявшись на $b °C <br>";
}
    function down(&$a, $b) {
    $a = $a - $b;
    echo "В течение дня температура изменилась до $a °C упав на $b °C <br>";
}
up ($a, $b);
up ($a, $b);
down ($a, $b);
down ($a, $b);
up ($a, $b);
?>
</body>
</html>