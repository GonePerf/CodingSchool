<?php 
session_start();
require_once "config.php";
get_header(); ?>
<main>
        
                <?php 
                if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
                    echo '<h2 class = "page-heading">All Courses</h2>
                    <section>';
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
                    echo '</section>';
                    }else {
                        
                        $i = 0;
                        if(sizeOf($_SESSION['owned']) == 4){
                            echo '<h2 class = "page-heading">Thank you for buy all the courses!</h2>
                        <section>';
                        }
                        else{
                            echo '<h2 class = "page-heading">Recomended courses</h2>
                        <section>';
                        
                        for($i = 0; $i < sizeOf($_SESSION['owned']); $i++){
                        for($j = 1; $j < 5; $j++){
                            if($_SESSION['owned'][$i] != $j){
                                $result = mysqli_query($link,"SELECT course_id, course_name, course_description FROM courses where course_id = ".$j);
                                $help_img_array = ["/img/java.jpg","/img/html.jpg","/img/python.jpg","/img/AI.jpg"];
                        
                        while ($row = $result->fetch_assoc()) {
                            //echo "<option selected value=".$row['course_id'].">".$row['course_name']."</option>";
                            echo '<div class="course">
                            <div class="course-image">
                                <a href="'.site_url('/course-single?course='.$row['course_id'].'').'">
                                    <img src="'.get_template_directory_uri().$help_img_array[$j-1].'" alt="Java course">
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
                        }
                            }
                        }

                        
                        
                        
                    }
                        
                    }
                    echo '</section>';
                }
                    
                ?>
                
            </section>
            
                <?php 
                if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
                   
                    
                    }else {
                        echo '<h2 class = "page-heading">Your Courses</h2>
                        <section>';
                        $i = 0;
                        foreach($_SESSION['owned'] as $course_id){
                            
                            $result = mysqli_query($link,"SELECT course_id, course_name, course_description FROM courses where course_id = ".$course_id);
                        $help_img_array = ["/img/java.jpg","/img/html.jpg","/img/python.jpg","/img/AI.jpg"];
                        
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
                    }
                    echo '</section>';
                }
                    
                ?>
                
            
<?php get_footer(); ?>