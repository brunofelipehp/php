<?php

function ola(){

    $argumento = func_get_args();

    return $argumento;
}

var_dump(ola("Boa noite", 10));