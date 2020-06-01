<?php

phpinfo();

echo 'Requested URL ="' . htmlspecialchars($_SERVER['QUERY_STRING']) . PHP_EOL . '"';

var_dump($_SERVER['QUERY_STRING']);
var_dump($_SERVER['DOCUMENT_ROOT']);
var_dump($_SERVER['SERVER_NAME']);