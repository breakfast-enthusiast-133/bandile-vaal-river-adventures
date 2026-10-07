<?php
// Vercel entry point: vercel.json sends every page request here and we load the matching page.
// On XAMPP this file is not used; Apache runs the pages directly.
$pages = array('index', 'about', 'tours', 'gallery', 'contact');
$page = isset($_GET['page']) && in_array($_GET['page'], $pages) ? $_GET['page'] : 'index';
chdir(__DIR__ . '/..');
require $page . '.php';
