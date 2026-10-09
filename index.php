<?php

    include_once("text.php");


    echo "\nВведите первое число: ";
    $input_1 = fgets(STDIN);

    echo "Введите второе число: ";
    $input_2 = fgets(STDIN);

    echo "Операция: ";
    $oper = fgets(STDIN);

    switch($oper){
        case $oper == 1:
            echo $input_1 + $input_2;
            break;
        case $oper == 2:
            echo $input_1 - $input_2;
            break;
        case $oper == 3:
            echo $input_1 * $input_2;
            break;
        case $oper == 4:
            echo $input_1 / $input_2;
            break;
        default:
            echo "Ошибка!";
    }
?>