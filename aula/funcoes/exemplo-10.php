<?php
//função anonima
function test($callback){

    $callback();
}

test(function(){

    echo "terminou";
});