<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo("encoding")?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name") ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <div class="container-fluid main-body p-0">
        <div class="row top-nav ">
            <div class="col-lg-6 col-sm-12   p-0">
                <?php
                $args = array(
                    'theme_location' => 'primary'
                );
                ?>
                <?php wp_nav_menu( $args); ?>
                
            </div>
            <div class="col-lg-6 col-sm-12   search">
                <?php get_search_form(); ?>
            </div>

        </div>



