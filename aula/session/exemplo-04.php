<?php

session_id('ob0grgsurrr5hjvqr8iuauq686array');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);