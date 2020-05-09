<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php  wp_head(); ?>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <link href="https://cdn.quilljs.com/1.3.6/quill.core.css" rel="stylesheet">
    <script type="text/javascript">
     window.onload=function()  //executes when the page finishes loading
    {
        setTimeout(func1, 5000);  //sets a timer which calls function func1 after 2,000 milliseconds = 2 secs.
        
    };
    function func1()
    {
        //document.getElementById('custom-ad-bottom').classList.remove('display-none');
        for(var i = 0.0; i < 1.0; i+=0.1){
            document.getElementById("custom-ad-bottom").classList.remove("ad-closed");
        }
    }
    </script>
</head>
<body>
    <div id="slideout-menu">
        <ul>
        <?php 
                    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){ 
                        if($_SESSION["username"] == "admin@wp.pl"){
                            echo  "<li><a href=".site_url('/admin-panel').">Courses Administration</a></li>";
                        }
                    
                    }
                ?>
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
                <?php 
                    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){ 
                        if($_SESSION["username"] == "admin@wp.pl"){
                            echo  "<a href=".site_url('/admin-panel').">Editing</a>";
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
                Contact</a>
            </li>
            <li>
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
        </ul>
    </nav>

    <div id="searchbox">
        <input type="text" placeholder="Search">
    </div>