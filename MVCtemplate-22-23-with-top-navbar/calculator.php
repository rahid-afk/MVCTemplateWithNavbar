<?php
$view = new stdClass();
$view->pageTitle = 'Calculator';
require_once('Models/Calculator.php');
if (isset($_POST['submit'])){

}
require_once('Views/calculator.phtml');
