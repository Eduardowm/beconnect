<?php
$page = array_key_exists('page', $_GET) ? $_GET['page'] : 'home';
$page .= '.php';

include_once('header.php');
include_once($page);
include_once('footer.php');
?>