<?php

$json = '[{"nome ":"Joao","idade":20},{"nome":"Maria","idade":25}]';

$data = json_decode($json, true);

var_dump($data);

?>