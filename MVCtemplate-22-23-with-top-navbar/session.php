<?php
session_start();
$view = new stdClass();
$view->pageTitle = "Sessions";
require ('Views/template/header.phtml');
$name = $_SESSION['name'];
$birthday = $_SESSION['birthday'];

echo "Welcome " . $name . "! You were born on " . $birthday;

require ('Views/template/footer.phtml');