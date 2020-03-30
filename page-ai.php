<?php 

session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ".site_url('/log-in'));

    exit;
}

get_header();  ?>

<main>
        <h2 class="page-heading">Course: Artifical Inteligence</h2>
        <div id="course-container">
            <section id="blogpost">
               <div class="course">
                   <div class="course-meta-blogspot">
                       The whole course created by GonePerf
                   </div>
                   <div class="course-image">
                       <img src="<?php echo get_template_directory_uri(); ?>/img/AI.jpg"  style="width: 95%;" alt="Course Image">
                   </div>
                   <div class="course-descrition">
                       <h3>Introduction</h3>
                       <p>Paragraf</p>
                       Lorem Ipsum is simply dummy text of the printing and
                       typesetting industry. Lorem Ipsum has been the 
                       industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and
                         scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and
                         typesetting industry. Lorem Ipsum has been the 
                         <p>Paragraf</p>
                         industry's standard dummy text ever since the 1500s,
                          when an unknown printer took a galley of type and
                           scrambled it to make a type specimen book.
                           Lorem Ipsum is simply dummy text of the printing and
                           typesetting industry. Lorem Ipsum has been the 
                           industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and
                            <p>Paragraf</p>
                             scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and
                             typesetting industry. Lorem Ipsum has been the 
                             industry's standard dummy text ever since the 1500s,
                              when an unknown printer took a galley of type and
                               scrambled it to make a type specimen book.
                   </div>
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