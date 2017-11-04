<?php

function is_adult($age){
    return $age >= 21;
}

function dd($data){
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}