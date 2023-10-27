<?php

$view = new stdClass();
$view->pageTitle = 'Cookies';
require('Views/template/header.phtml');

echo "Welcome " . $_COOKIE['name'] . "! You were born on " . $_COOKIE['birthday'];

require('Views/template/footer.phtml');