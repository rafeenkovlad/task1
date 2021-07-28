<?php

function balance($str1, $str2)
{
    $left = sum($str1);
    $right = sum($str2);

    switch($left){
        case ($left > $right):
            echo 'left</br>';
            break;
        case ($left < $right):
            echo 'right</br>';
            break;
        default:
            echo  "Balance</br>";

    }
}

function sum($str)
{
    $arr = str_split($str);

    $arr = array_map(function($value){
        return ($value==='!')? 2 : 3;
    }, $arr);

    return array_sum($arr);
}


balance("!!","??");
balance("!??","?!!");
balance("!?!!","?!?");
balance("!!???!????","??!!?!!!!!!!");
