<?php
// Shared header: every page sets $pageTitle and $currentPage before including this file.
function navClass($page, $currentPage) {
    return $page === $currentPage ? ' class="active" aria-current="page"' : '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Vaal River Adventures: river cruises, Vredefort Dome day trips and heritage tours from Vanderbijlpark, Gauteng.">
    <title><?php echo htmlspecialchars($pageTitle); ?> | Vaal River Adventures</title>
    <link rel="icon" href="images/logo.svg" type="image/svg+xml">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css?v=2">
</head>
<body>
<a class="skip-link" href="#main">Skip to content</a>

<header class="site-header">
    <div class="header-inner">
        <a href="index.php" class="logo" aria-label="Vaal River Adventures home">
            <img src="images/logo.svg" alt="Vaal River Adventures logo" width="34" height="34">
            <span>Vaal River Adventures</span>
        </a>

        <button class="nav-toggle" aria-expanded="false" aria-controls="main-nav" aria-label="Open menu">
            <i class="fa-solid fa-bars"></i>
        </button>

        <nav id="main-nav" class="main-nav" aria-label="Main">
            <ul>
                <li><a href="index.php"<?php echo navClass('home', $currentPage); ?> data-i18n="nav.home">Home</a></li>
                <li><a href="about.php"<?php echo navClass('about', $currentPage); ?> data-i18n="nav.about">About</a></li>
                <li class="has-dropdown">
                    <a href="tours.php"<?php echo navClass('tours', $currentPage); ?> aria-haspopup="true">
                        <span data-i18n="nav.tours">Tours</span> <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown">
                        <li><a href="tours.php#river-cruises" data-i18n="nav.cruises">River Cruises</a></li>
                        <li><a href="tours.php#vredefort-dome" data-i18n="nav.dome">Vredefort Dome</a></li>
                        <li><a href="tours.php#heritage-tours" data-i18n="nav.heritage">Heritage Tours</a></li>
                    </ul>
                </li>
                <li><a href="gallery.php"<?php echo navClass('gallery', $currentPage); ?> data-i18n="nav.gallery">Gallery</a></li>
                <li><a href="contact.php"<?php echo navClass('contact', $currentPage); ?> data-i18n="nav.contact">Contact &amp; Book</a></li>
            </ul>
            <button class="lang-toggle" type="button" aria-label="Switch language">
                <i class="fa-solid fa-language" aria-hidden="true"></i> <span>Sesotho</span>
            </button>
            <a href="contact.php" class="btn header-cta" data-i18n="home.cta2">Book now</a>
        </nav>
    </div>
</header>

<main id="main">
