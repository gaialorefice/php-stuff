<?php

require 'functions.php';

$age = 20;


if(is_adult($age)){
    echo 'You can come in!';
}else{
    echo 'You can\'t come in!';
}