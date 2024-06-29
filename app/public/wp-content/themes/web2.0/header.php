<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <?php //font piesimo ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
</head>

<body class="bg-dark" <?php body_class(); ?>>
    <header class="bg-primary sticky-top shadow-lg">
        <div class="container">
            <nav class="navbar bg-primary border-body navbar-expand-lg" data-bs-theme="dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?php site_url() ?>/">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php site_url() ?>/kontaktai/">Kontaktai</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php site_url() ?>/apie-mus/">Apie mus</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php site_url() ?>/paslaugos/">Paslaugos</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>