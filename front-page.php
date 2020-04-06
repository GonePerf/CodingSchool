<?php
session_start();

get_header(); ?>
    <div id="banner">
        <h1>&lt;Cooding School /&gt;</h1>
        <h3><a href = "<?php echo site_url('/register'); ?>" style="color: white; text-decoration: none; cursor: pointer;">Join now and learn coding <i class="fas fa-hand-pointer"></i> </a></h3>
    </div>

    <main>
        <a href="<?php echo site_url('/courses'); ?>">
            <h2 class="section-heading">Courses</h2>
        </a>
        <section>
                <?php 
                    require_once "config.php";
                    $result = mysqli_query($link,"SELECT course_id, course_name, course_description FROM courses");
                    $help_img_array = ["/img/java.jpg","/img/html.jpg","/img/python.jpg","/img/AI.jpg"];
                    $i = 0;
                    while ($row = $result->fetch_assoc()) {
                        if($i == 2){
                            break;
                        }
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

            <h2 class="section-heading">My Projects</h2>

            <section>

                <div class="course">
                    <div class="course-image">
                        <a href="<?php echo site_url('/somenote'); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/somenote.png" alt="Java course">
                        </a>
                    </div>
                    <div class="course-description">
                        <a href="<?php echo site_url('/somenote'); ?>">
                            <h3>SomeNote</h3>
                        </a>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and
                     typesetting industry. Lorem Ipsum has been the 
                     industry's standard dummy text ever since the 1500s,
                      when an unknown printer took a galley of type and
                       scrambled it to make a type specimen book.
                        </p>
                        <a href="<?php echo site_url('/somenote'); ?>l" class="btn-readmore">Read more</a>
                    </div>
                </div>
                <div class="course">
                    <div class="course-image">
                        <a href="<?php echo site_url('/calculator'); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/calculator.png">
                        </a>
                    </div>
                    <div class="course-description">
                        <a href="<?php echo site_url('/calculator'); ?>">
                            <h3>Advanced calculator</h3>
                        </a>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and
                     typesetting industry. Lorem Ipsum has been the 
                     industry's standard dummy text ever since the 1500s,
                      when an unknown printer took a galley of type and
                       scrambled it to make a type specimen book.
                        </p>
                        <a href="<?php echo site_url('/calculator'); ?>" class="btn-readmore">Read more</a>
                    </div>
                </div>
                
                
            </section>

            <h2 class="section-heading">Source Code</h2>

            <section id="section-source">
                <p>Lorem Ipsum is simply dummy text of the printing and
                     typesetting industry. Lorem Ipsum has been the 
                     industry's standard dummy text ever since the 1500s,
                      when an unknown printer took a galley of type and
                       scrambled it to make a type specimen book. </p>
                <a href="https://github.com/GonePerf" class="btn-readmore">GitHub Profile</a>
            </section>

<?php get_footer(); ?>          