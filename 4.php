<html>
<body>
<?php
function umnozhenie()
{
    $i = 10;
    $j = 10;
    echo "<table border=\"1\">";
    for ($a = 1; $a < $i; $a++) {
        echo '<tr>';
        for ($b = 1; $b < $j; $b++)
            echo '<td>' . $b * $a . '</td>';
        echo '</tr>';
    }
    echo "</table>";
}
umnozhenie();
?>
</body>
</html>
