<?php
    echo "Добро пожаловать! Вот возможные команды:";
    echo "\n1) Сложить\n2) Вычесть\n";

    echo "1";

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
        default:
            echo "Ошибка!";
    }
?>