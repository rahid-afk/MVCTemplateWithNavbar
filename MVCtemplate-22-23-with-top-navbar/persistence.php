<?php
$view = new stdClass();
$view->pageTitle = 'Cookies';
require_once('Models/Persistence.php');
if (isset($_POST['submit'])){
    $cookie = new Persistence($_POST['name'], $_POST['birthday']);
    $value = $cookie->createCookie();
    $view->result = "Hello " . $_COOKIE['name'] . ". You were born on " .
    $_COOKIE['birthday'];
}

if (($_COOKIE['name'] != null) && ($_COOKIE['birthday'] != null)) {
    require_once('Views/cookie.phtml');
} else{
    require_once ('Views/persistence.phtml');
}

