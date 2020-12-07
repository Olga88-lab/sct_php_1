<html>
<body>
<?php
/**
 * Функция вывода данных о человеке
 * @param $name если данный параметр не введен, имя человека не выводится
 * @param string $age если данный параметр не введен, возраст человека не выводится
 * @param string $address если данный параметр не введен, адрес человека не выводится
 * @return string
 */
function letText ($name, $age = "", $address = "")
{
    if ($age !== '') {
        if ($age%10 == 0) {
        $text = 'лет' ;
        }
        if ($age%10 == 1) {
        $text = 'год' ;
        }
        elseif ($age%10 > 1 && $age%10 < 5) {
        $text = 'года' ;
        }
        else  if ($age%10 > 4 && $age%10 < 21) {
        $text = 'лет' ;
        }
        echo  "$name $age $text $address";
    }
    elseif ($age == '') {
    return "$name $address";
    }
    elseif ($name == '') {
    return "$age $address";
    }
    elseif ($address == '') {
    return "$name $age";
    }
}
echo letText ('Кира', '34', 'Санкт-Петербург, ул.Колыменская, д. 93, кв. 12');
?>
</ body >
</ html >