<?php
session_start();
require_once ('Views/login.phtml');
$view = new stdClass();
$view->pageTitle = "Log In";
$view->login = false;
if (isset($_POST['submit'])){
    if ($_POST['name'] === 'rahid' && $_POST['password'] === 'rahid'){
        echo 'Hi ' . $_POST['name'] . "." . "<br>";
        echo 'You are now logged in.';
        $view->login = true;
    } else {
        echo 'Incorrect details! Please try again';
    }
}