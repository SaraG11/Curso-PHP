<?php

function app_autoload($class){
    require_once './clases/'.strtolower($class).'.php';
}

spl_autoload_register('app_autoload');