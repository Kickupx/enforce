<?php

namespace Enforce;

function enforceNotExists($name, array $container, $arr_name) {
    if(array_key_exists($name, $container)) throw new EnforceException("$arr_name in $name already exists");
}

function enforce($value, $msg) {
    if(!$value) throw new EnforceException($msg);
}

function enforceExists($name, array $container, $arr_name) {
    if(!array_key_exists($name, $container)) throw new EnforceException("$arr_name in $name does not exist");
}

class EnforceException extends \Exception {}