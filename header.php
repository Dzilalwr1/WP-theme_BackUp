<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
    <header>
        <div class="logo-container">
            <?php
            if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }
            ?>
            <div class="logo">
                <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h1>
            </div>
        </div>
        
        <nav class="primary-menu">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary-menu',
                'container'      => false,
            ) );
            ?>
        </nav>

        <a href="https://gofood.co.id/samarinda/restaurant/exca-coffee-samarinda-70325371-ccca-4daa-9e64-9abe850834eb" class="cta-button-order" target="_blank" rel="noopener noreferrer">
            Order Now
        </a>

        <button id="nav-toggle" class="nav-toggle" aria-controls="primary-menu" aria-expanded="false">
            <span class="sr-only">Buka menu</span>
            <span></span>
            <span></span>
            <span></span>
        </button>
    </header>

    <main>