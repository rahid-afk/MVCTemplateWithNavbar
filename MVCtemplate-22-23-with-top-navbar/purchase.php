<?php
$view = new stdClass();
$view->pageTitle = 'Query String';

    $prod = $_GET['product'];

if ($prod == 1){
    $view->item = 'Sony TV';
    $view->cost = '£950';
} else if ($prod == 2){
    $view->item = 'Panasonic DVD';
    $view->cost = '£80';
} else if ($prod == 3){
    $view->item = 'Philips Video';
    $view->cost = '£110';
}

require_once ('Views/purchase.phtml');