<?php
$pages = array('index', 'about', 'tours', 'gallery', 'contact');
$page = isset($_GET['page']) && in_array($_GET['page'], $pages) ? $_GET['page'] : 'index';
chdir(__DIR__ . '/..');
require $page . '.php';
