<?php 
session_start();
require_once "config.php";
get_header(); ?>
<main>
        <h2 class = "page-heading">All Courses</h2>
            <section>
                <?php 
                    $result = mysqli_query($link,"SELECT course_id, course_name, course_description FROM courses");
                    $help_img_array = ["/img/java.jpg","/img/html.jpg","/img/python.jpg","/img/AI.jpg"];
                    $i = 0;
                    while ($row = $result->fetch_assoc()) {
                        //echo "<option selected value=".$row['course_id'].">".$row['course_name']."</option>";
                        echo '<div class="course">
                        <div class="course-image">
                            <a href="'.site_url('/course-single?course='.$row['course_id'].'').'">
                                <img src="'.get_template_directory_uri().$help_img_array[$i].'" alt="Java course">
                            </a>
                        </div>
                        <div class="course-description">
                            <a href="'.site_url('/course-single?course='.$row['course_id'].'').'">
                                <h3>'.$row['course_name'].'</h3>
                            </a>
                            <div class="course-meta">
                                Created by GonePerf
                            </div>
                            <p>
                            '.$row['course_description'].'
                            </p>
                            <a href="'.site_url('/course-single?course='.$row['course_id'].'').'" class="btn-readmore">Read more</a>
                        </div>
                    </div>';
                    $i++;
                    }
                ?>
                
            </section>
<?php get_footer(); ?>