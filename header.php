<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php  wp_head(); ?>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <link href="https://cdn.quilljs.com/1.3.6/quill.core.css" rel="stylesheet">
    
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
                <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){ 
                   echo  "<a href=".site_url('/logout')." style='color: red;'>Sign Out</a>";
                    
                }else{
                    echo "<a href=".site_url('/log-in').
                    ">Sign In</a>";
                }
                ?>
            </li>
            <li>
                <input type="text" placeholder="Search">
            </li>
            
        </ul>
    </div>

    <nav>
        <div id="logo-img">
            <a href="<?php echo site_url(''); ?>">
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
                <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){ 
                   echo  "<a href=".site_url('/logout').">Sign Out</a>";
                    
                }else{
                    if(is_page('log-in')){
                        echo "<a href=".site_url('/log-in').' class="active"'.  
                        ">Sign In</a>";
                    }
                    else{
                        echo "<a href=".site_url('/log-in').
                        ">Sign In</a>";
                    }
                }
                ?>
            </li>
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
                <i class="fas fa-phone" alt="Contact"></i></a>
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