<?php

$autoload = [
    'core/baseController',
    'core/session',
    'core/input',
    'website'
];

foreach($autoload as $file){
    require "$file.php";
}