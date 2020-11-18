<?php
    $name = 'Математическое действие';
    $a = 8;
    $b = 12;
    $operation = 'multiply';
    $isAvailableCalculation = true;
?>
<!DOCTYPE html>
<html>
<head>
    <title> <?= $name ?> </title>
</head>
<body>
    <?php
    echo "<h2> $name </h2>"?>
    <form action = "index.php" method = "post">
        <select size = "4" multiple name = "Математическое действие">
            <option disabled> Вид вычисления </option>
            <?php if ($operation == 'add' && $isAvailableCalculation == true) { ?>
                <option selected value = "+"> + </option>
                <?php
            }
            else {?>
                <option value = "+"> + </option>
                <?php
            }
            ?>
            <?php if ($operation == 'subtract' and $isAvailableCalculation == true) { ?>
                <option selected value = "-"> - </option>
                <?php
            }
            else { ?>
                <option value = "-"> - </option>
                <?php
            }
            ?>
            <?php if ($operation == 'multiply' and $isAvailableCalculation == true) { ?>
                <option selected value = "*"> * </option>
                <?php
            }
            else { ?>
                <option value = "*"> * </option>
                <?php
            }
            ?>
            <?php if ($operation == 'divide' and $isAvailableCalculation == true) { ?>
                <option selected value = "/"> / </option>
                <?php
            }
            else { ?>
                <option value = "/"> / </option>
                <?php
            }
            ?>
        </select><br>
    <?php
    if ($operation == 'add' && $isAvailableCalculation == true) {
        echo  'Сумма чисел ' . $a . ' и ' . $b . ' = ' . $c = $a + $b;
    }
    if ($operation == 'subtract' && $isAvailableCalculation == true) {
        echo  'Разница чисел ' . $a . ' и ' . $b . ' = ' . $c = $a - $b;
    }
    if ($operation == 'multiply' && $isAvailableCalculation == true) {
        echo  'Произведение чисел ' . $a . ' и ' . $b . ' = ' . $c = $a * $b;
    }
    if ($operation == 'divide' && $isAvailableCalculation == true) {
        echo  'Частное чисел ' . $a . ' и ' . $b . ' = ' . $c = $a / $b;
    }
    if ($isAvailableCalculation !=true) {
        echo 'Вычисление невозможно!';
    }
    ?>
</body>
</html>