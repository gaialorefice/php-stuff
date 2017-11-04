<?php

require 'functions.php';

$age = 20;
$ages = [ 30 , 50 , 44 ,'cinquanta'];

if(is_adult($age)){
    echo 'You can come in!';
}else{
    echo 'You can\'t come in!';
}

dd($ages);