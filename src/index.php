<?php

require './bootstrap.php';
$page = array_key_exists('page', $_GET)? $_GET['page']:'index';

$controller = new \PhpWebsite\Controller($page);