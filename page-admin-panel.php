<?php 
session_start();


$selected_val = "";
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){

    header("location: ".site_url('/log-in'));
    exit;
}
if($_SESSION["username"] == "admin@wp.pl"){
        
}
else {
    header("location: ".site_url(''));
}
get_header();
require_once "config.php";
 ?>

<main>


        <h2 class="page-heading">Administration panel</h2>
        <div id="course-container">
        <section id="blogpost" style = "width: 100%;  border: none;">
            <div id = "choose">
            <form action="" method="post">
                <select name = "course_id" id = "course_id">
                <option value="">----</option>
                <?php 
                    
                    $result = mysqli_query($link,"SELECT course_id, course_name FROM courses");
                    while ($row = $result->fetch_assoc()) {
                        if($_POST['course_id'] == $row['course_id']){
                            echo "<option selected value=".$row['course_id'].">".$row['course_name']."</option>";
                        }
                        else {
                            echo "<option value=".$row['course_id'].">".$row['course_name']."</option>";
                        }
                        
                    }
                    // $result = mysqli_query($link,"SELECT project_name FROM projects");
                    // while ($row = $result->fetch_assoc()) {
                    //     echo "<option>".$row['project_name']."</option>";
                    // }
                ?>
                </select>
                <select name = "free_or_not">
                        <option value="">----</option>
                        <option <?php if($_POST["free_or_not"] == "1") echo "selected" ?> value="1">Free content</option>
                        <option <?php if($_POST["free_or_not"] == "2") echo "selected" ?> value="2">Not free content</option>
                </select>
                <input name = "edit" id="change" style = "float: right; width: 45%; height: 40px;" type = "submit" value = "Edit" />
                </form>
            </div>
            <div id="editor">
                <?php 
                    if(isset($_POST['edit'])){
                        if($_POST["free_or_not"] == "" || $_POST["course_id"] == ""){
                            echo "choose";
                        }else{
                            if($_POST["free_or_not"] == "1"){
                                $selected_val = $_POST['course_id'];
                                $result = mysqli_query($link,"SELECT free_content FROM courses WHERE course_id = '$selected_val'");
                                while ($row = $result->fetch_assoc()) {
                                    echo $row['free_content'];
                                }
                            }else{
                                $selected_val = $_POST['course_id'];
                                $result = mysqli_query($link,"SELECT content FROM courses WHERE course_id = '$selected_val'");
                                while ($row = $result->fetch_assoc()) {
                                    echo $row['content'];
                                }
                            }
                        }
                        
                        
                    }
                    
                ?>
             </div>
            
             <button name = "submit" style="width: 100%; height: 40px;" id="change" type = "submit" onclick = "show()">Submit</Button>
             

            
            
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
            var e = document.getElementById("course_id");
            var content = quill.container.firstChild.innerHTML;
            var id = e.options[e.selectedIndex].value;
            function show(){
                content = quill.root.innerHTML;
                jQuery.ajax({
                    type: 'POST',
                    data: {content:content, id:id},            
                success: function(data) {
                    <?php
                        if(isset($_POST['content']) && isset($_POST['id'])){
                            $content = '<div class="course-descrition">'.$_POST['content']."</div>";
                            $id = $_POST['id'];
                            if($_POST["free_or_not"] == "2"){
                                $post = "UPDATE courses SET content = '$content' WHERE course_id = '$id'";
                            } 
                            else{
                                $post = "UPDATE courses SET free_content = '$content' WHERE course_id = '$id'";

                            }
                            if(mysqli_query($link,$post)){
                                unset($content);
                                unset($id);
                            }
                        }
                


                    ?>
                    alert("Content of course was updated!");
                }  
                });
            }
        </script>
        <style>
            select{
                margin-top: 25px;
                margin-bottom: 25px;
                height: 40px;
                width: 25%;
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
                box-shadow: none;
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