<?php 
session_start();

get_header();

if((!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) && $_SESSION['username'] != 'admin@wp.pl'){
    header("location: ".site_url('/log-in'));

    exit;
} 
require_once "config.php";
 ?>

<main>
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

        <h2 class="page-heading">Administration panel</h2>
        <div id="course-container">
        <section id="blogpost" style = "width: 100%;  border: none;">
            <div id = "choose">
                <select>
                <option>-</option>
                <?php  

                    $result = mysqli_query($link,"SELECT course_name FROM courses");
                    while ($row = $result->fetch_assoc()) {
                        echo "<option>".$row['course_name']."</option>";
                    }
                    $result = mysqli_query($link,"SELECT project_name FROM projects");
                    while ($row = $result->fetch_assoc()) {
                        echo "<option>".$row['project_name']."</option>";
                    }
                ?>
                </select>
                <button id="change" style = "float: right; width: 45%; height: 40px;" type = "submit">Edit</button>
            </div>
            <div id="editor">
                <?php 
                    
                    //$content = "";
                    $result = mysqli_query($link,"SELECT content FROM courses WHERE course_name = 'Java programming'");
                    while ($row = $result->fetch_assoc()) {
                        echo $row['content']."<br>";
                    }
                ?>
             </div>
            <button id="change" style = "height: 40px;" type = "submit">Submit</button>
            <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
            </section>
            
        </div>

        <script>
            var toolbarOptions = [
                ['bold', 'italic', 'underline', 'strike'],
                ['blockquote', 'code-block'],
                [{'header': 1}, {'header': 2}],
                [{'list': 'ordered'},{'list': 'bullet'}],
                [{'size': ['small', false, 'large', 'huge']}],
                ['link', 'image', 'video'],
                [{'color': []}, {'background': []}],
                [{'align': []}]
            ]
            var quill = new Quill('#editor', {
                modules: {
                toolbar: toolbarOptions
                },
                theme: 'snow'
            });
        </script>
        <style>
            select{
                margin-top: 25px;
                margin-bottom: 25px;
                height: 40px;
                width: 45%;
                float: left;

            }
            #change{
                background: white;
                border: 1px solid black;
                border-radius: 10px;
                font-size: 24px;
                transition: 0.4s;
                margin-top: 25px;
                margin-bottom: 25px;
            }
            #change:hover{
                color: red;
                transition: 0.4s;
                box-shadow: inset 8px 3px 18px -4px rgba(0, 0, 0, 0.4);
                cursor: pointer;
            }
            #editor{
                width: 100%;
                float: left;
                height: 500px;
                border: 1px solid black;
                margin-top: 5px;
            }
        </style>

<?php get_footer(); ?>