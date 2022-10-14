<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="One Page WordPress Theme Developed By Faraz Hashmi" />
        <meta name="author" content="Engr. Faraz Hashmi" />
        <title><?php bloginfo('name'); ?></title>
        <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo get_template_directory_uri(); ?>/css/styles.css" rel="stylesheet" />
        <script>
        </script>
        <?php wp_head(); ?>
    </head>
    <body id="page-top"<?php body_class(); ?>>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-5">
                <a class="navbar-brand" href="#page-top"><?php bloginfo('name'); ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <?php wp_nav_menu([
                            'menu_class' => 'navbar-nav ms-auto', // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                            'container_class' => 'collapse navbar-collapse', // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
                            'theme_location' => 'primary', // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
                    ]); ?>
                    <!-- <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#!">Sign Up</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Log In</a></li>
                    </ul> -->
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="masthead text-center text-white">
            <div class="masthead-content">
                <div class="container px-5">
                    <h1 class="masthead-heading mb-0"><?php bloginfo('name'); ?></h1>
                    <h2 class="masthead-subheading mb-0"><?php bloginfo('description'); ?></h2>
                </div>
            </div>
            <div class="bg-circle-1 bg-circle"></div>
            <div class="bg-circle-2 bg-circle"></div>
            <div class="bg-circle-3 bg-circle"></div>
            <div class="bg-circle-4 bg-circle"></div>
        </header>