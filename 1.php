<html>
<body>
    <?php
    data('Светлана', '45', 'г.Москва, ул.Чернышевского, д.15, кв.56');
    function data($name, $age, $address)
        {
            if($age%10 == 1) {
                $text = 'год';
            } elseif ($age%10 > 1 && $age %10 < 5) {
                $text = 'годa';
            } elseif ($age%10 > 4 && $age %10 < 21) {
                $text = 'лет';
            }
            echo  "{$name} {$age} {$text} {$address}<hr>";
        }
    ?>
</body>
</html>