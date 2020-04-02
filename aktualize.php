<?php
session_start();
echo "<script type='text/javascript'>alert('WESZŁO');</script>";
require_once "config.php";
if(isset($_POST['content']) && isset($_POST['id'])){
    $content = '<div class="course-descrition">'.$_POST['content']."</div>";
    $id = $_POST['id'];
    $post = "UPDATE courses SET content = '$content' WHERE course_id = '$id'";
    if(mysqli_query($link,$post)){
        print_r("Sukces");
    }
}


?>