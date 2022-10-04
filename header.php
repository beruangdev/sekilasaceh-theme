<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    
    <?php wp_head(); ?>


</head>

<body <?php body_class('bg-white text-gray-900 antialiased'); ?>>

    <?php do_action('tailpress_site_before'); ?>

    <div id="page" class="min-h-screen flex flex-col">

        <?php do_action('tailpress_header'); ?>

        <?php get_template_part('template-parts/front-page/navbar'); ?>
     

        <div id="content" class="site-content container mx-auto">
            <?php if (is_front_page()) { ?>
                <h1>ADA NI GESSSS</h1>
                <?php get_template_part('template-parts/front-page/featured-slider'); ?>
            <?php } ?>

            <?php do_action('tailpress_content_start'); ?>

            <main>
