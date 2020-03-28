<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php  wp_head(); ?>
    <title>Document</title>
</head>
<body>
    <div id="slideout-menu">
        <ul>
            <li>
                <a href="<?php echo site_url(''); ?>">
                Home</a>
            </li>
            <li>
                <a href="<?php echo site_url('/courses'); ?>">
                Courses</a>
            </li>
            <li>
                <a href="<?php echo site_url('/projects'); ?>">
                Projects</a>
            </li>
            <li>
                <a href="<?php echo site_url('/contact'); ?>">Contact</a>
            </li>
            <li>
                <input type="text" placeholder="Search">
            </li>
        </ul>
    </div>

    <nav>
        <div id="logo-img">
            <a href="#">
                <!-- LOGO -->
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
            
            </a>
        </div>
        <div id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <ul>
            <li>
                <!-- TOP MENU -->
                <a href="<?php echo site_url(''); ?>"
                <?php if(is_front_page()) echo 'class="active"' ?> 
                >Home</a>
            </li>
            <li>

                <a href="<?php echo site_url('/courses'); ?>"
                <?php if(is_page('courses')) echo 'class="active"' ?> >
                Courses</a>
            </li>
            <li>
                <a href="<?php echo site_url('/projects'); ?>"
                <?php if(is_page('projects')) echo 'class="active"' ?> >
                 Projects</a>
            </li>
            <li>
                <a href="<?php echo site_url('/contact'); ?>"
                <?php if(is_page('contact')) echo 'class="active"' ?> >
                Contact</a>
            </li>
            <li>
                <div id="search-icon">
                    <i class="fas fa-search"></i>
                </div>
            </li>
        </ul>
    </nav>

    <div id="searchbox">
        <input type="text" placeholder="Search">
    </div>