<?php
$view = new stdClass();
$view->pageTitle = 'Calculator';
require_once('Models/Calculator.php');
if (isset($_POST['submit'])){
//    $calculator = new Calculator($_POST['firstNumber'], $_POST['secondNumber'], $_POST['operator']);
    $calculator = new Calculator($_POST['expression']);
    $value = $calculator->calculate();
//    $view->result = 'Calculating ' . $_POST['firstNumber'] . ' '
//        . $_POST['operator'] . ' ' . $_POST['secondNumber'] . ' is ' . $value . '.';

    $view->result = "Calculating " . $_POST['expression'] . " " . " is " . $value . ".";
}
require_once('Views/calculator.phtml');
