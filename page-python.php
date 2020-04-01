<?php 

session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ".site_url('/log-in'));

    exit;
}

get_header();  ?>

<main>
        <h2 class="page-heading">Course: 
        <?php   
                require_once "config.php";
               
                $result = mysqli_query($link,"SELECT course_name FROM courses WHERE course_id = '3'");
                while ($row = $result->fetch_assoc()) {
                    echo $row['course_name'];
                }

            ?>
        </h2>
        <div id="course-container">
            <section id="blogpost">
               <div class="course">
                   <div class="course-meta-blogspot">
                       The whole course created by GonePerf
                   </div>
                   <div class="course-image">
                       <img src="<?php echo get_template_directory_uri(); ?>/img/python.jpg"  style="width: 95%;" alt="Course Image">
                   </div>
                   <?php
                    $result = mysqli_query($link,"SELECT content FROM courses WHERE course_id = '3'");
                        while ($row = $result->fetch_assoc()) {
                            echo $row['content']."<br>";
                        }
                    ?>
               </div> 
               
               
            </section>
            <aside id="lessons-section">
                <a id="lesson" href = "">Lesson →</a>
                <a id="lesson" href = "">Lesson →</a>
                <a id="lesson" href = "">Lesson →</a>
                <a id="lesson" href = "">Lesson →</a>
                <a id="lesson" href = "">Lesson →</a>
                <a id="lesson" href = "">Lesson →</a>
                <a id="lesson" href = "">Lesson →</a>
                <a id="lesson" href = "">Lesson →</a>
                <a id="lesson" href = "">Lesson →</a>
                <a id="lesson" href = "">Lesson →</a>
           </aside>
        </div>

<?php get_footer();  ?>