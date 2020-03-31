<?php 
session_start();
if((!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) && $_SESSION['username'] != 'admin@wp.pl'){
    header("location: ".site_url('/log-in'));

    exit;
} 
get_header(); ?>

<main>
        <h2 class="page-heading">Administration panel!</h2>
        <div id="course-container">
            <section id="blogpost">
               <div class="course">
                   <div class="course-meta-blogspot">
                       NOW EDITING: ...
                   </div>
                   <div class="course-image">
                   <h3>Content of course:</h3>
                        <textarea id="course-content" rows="10" cols="100">Course content</textarea>
                    </div>
                   <div class="course-descrition">
                   <h3>Premium content of course:</h3>
                    <textarea id="course-premium-content" rows="10" cols="100">Course premium content</textarea>
                   </div>
                   <button style="margin-top: 20px; width: 220px; height: 40px;" type="submit">Submit</button>
               </div> 
               
               
            </section>
            <aside id="course-choose">
                <h2 style = "color: white;">Choose course to editing:</h2>
                <button id="once-course" href = "">Java</button>
                <button id="once-course" href = "">HTML + CSS</button>
                <button id="once-course" href = "">once-course</button>
                <button id="once-course" href = "">once-course →</button>
                <button id="once-course" href = "">once-course →</button>
                <h2 style = "color: white;">Choose project to editing:</h2>
                <button id="once-course" href = "">SomeNote</button>
                <button id="once-course" href = "">Calculator</button>
           </aside>
        </div>

<style>
button{
    font-size: 20px;
    margin-bottom: 20px;
    background: none;
    border: 1px solid black;
    color: black;
    transition: 0.4s;
    border-radius: 10px;
}
button:hover{
    color: red;
    box-shadow: inset 8px 3px 18px -4px rgba(0, 0, 0, 0.4);
    cursor: pointer;
    transition: 0.4s;
  }

 #course-content{
     width: 90%;
     height: 400px;
 }
 #course-premium-content{
     width:90%;
     height: 400px;
 }
 #course-choose{
    background: #333;
    flex: 1;
    text-align: center;
    padding:  8px 16px;
    min-width: 130px;
    box-shadow: inset 27px 0 51px -18px rgba(65, 65, 65, 0.75);
}
#once-course{
    width: 100%;
    height: 7%;
    text-align: center;
    display: block;
    background: white;
    border: 1px solid black;
    color: black;
    font-size: 24px;
    transition: 0.4s;
    text-decoration: none;
    
}
#once-course:hover{
    color: red;
    box-shadow: inset 8px 3px 18px -4px rgba(0, 0, 0, 0.4);
    cursor: pointer;
    transition: 0.4s;
}
</style>

<?php get_footer(); ?>