<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Primeiro Tema</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
    <h1>Meu primeiro tema</h1>
    
    <?php
        if(has_nav_menu('primary')) {
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => 'nav',
                'container_class' => 'main_menu',
                'fallback_cb' => false
            ));
        }
    ?>
    </header>