<?php
session_start();
$view = new stdClass();
$view->pageTitle = "Sessions";
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $birthday = $_POST['birthday'];
    $_SESSION['name'] = $name;
    $_SESSION['birthday'] = $birthday;
}

require_once ('Views/persistence_session.phtml');