<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
    <?php wp_head(); ?>
</head>

<header class="header">
<body <?php body_class(); ?>>

   

        <div class="header-menu">
            <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
        </div>

        <div class="header-cover">
            <div class="cover-content-title">
                <h1>Olivier Dal Ferro</h1>
            </div>
            <div class="cover-content-job">
                <h2>Développeur Web</h2>
            </div>
        </div>

    </header>
    
<?php wp_body_open(); ?>
