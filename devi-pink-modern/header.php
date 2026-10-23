<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="page-wrapper">
<header class="site-header">
    <nav class="navbar" aria-label="Navigasi utama">
        <div class="navbar-inner">
            <div class="logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php if ( has_custom_logo() ) { the_custom_logo(); } else { bloginfo( 'name' ); } ?>
                </a>
            </div>
            <div class="nav-menu">
                <?php
                if ( has_nav_menu( 'primary' ) ) {
                    wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'items_wrap' => '%3$s', 'fallback_cb' => false ) );
                } else { ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                    <a href="<?php echo esc_url( home_url( '/#profil' ) ); ?>">Profil</a>
                    <a href="<?php echo esc_url( get_post_type_archive_link( 'post' ) ?: home_url( '/#artikel' ) ); ?>">Artikel</a>
                    <a href="<?php echo esc_url( home_url( '/#kontak' ) ); ?>">Kontak</a>
                <?php } ?>
            </div>
        </div>
    </nav>
</header>
