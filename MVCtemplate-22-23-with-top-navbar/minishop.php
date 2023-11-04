<?php
$view = new stdClass();
$view->pageTitle = 'MiniShop';

if ($view->login == false){

} else {
    require_once ('Views/minishop.phtml');
}