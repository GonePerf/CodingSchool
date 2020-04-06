<?php 

session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ".site_url('/log-in'));

    exit;
}


get_header();  


?>

<main>
        <h2 class="page-heading">Course: 
            <?php   
                require_once "config.php";
                
                $result = mysqli_query($link,"SELECT course_name FROM courses WHERE course_id = ".$_GET['course']."");
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
                   <!-- <div class="course-image">
                       <img src="/img/java.jpg"  style="width: 95%;" alt="Course Image">
                   </div> -->
                   <?php 
                        require_once "config.php";
                        //$content = "";
                        $result = mysqli_query($link,"SELECT free_content FROM courses WHERE course_id = ".$_GET['course']."");
                        while ($row = $result->fetch_assoc()) {
                            echo $row['free_content'];
                        }

                        $owned = mysqli_query($link,"SELECT owned_id FROM owned WHERE course_id = ".$_GET['course']." AND user_id = ".$_SESSION["id"]."");
                        if(mysqli_num_rows($owned) > 0){
                            $result = mysqli_query($link,"SELECT content FROM courses WHERE course_id = ".$_GET['course']."");
                            while ($row = $result->fetch_assoc()) {
                                echo $row['content'];
                            }
                            echo "<br> <h2>What do you think about this course?</h2>
                            
                            <i class='fas fa-star' id = '1' onclick='light(1)' ></i>
                            <i class='fas fa-star' id = '2' onclick='light(2)'></i>
                            <i class='fas fa-star' id = '3' onclick='light(3)'></i>
                            <i class='fas fa-star' id = '4' onclick='light(4)'></i>
                            <i class='fas fa-star' id = '5' onclick='light(5)'></i>
                            
                            ";
                        }
                        else{
                            echo "YOU CAN BUY THE WHOLE COURSE >HERE<";
                        }
                    ?>
                    <style>
                    .fa-star{
                        color: black;
                        padding: 10px;
                        padding-bottom: 30px;
                        font-size: 32px;
                    }
                    .light{
                        color: yellow;
                    }
                    
                    

                    
                    </style>
                    <script>
                        function light(x){
                            for(var i = 1; i <= 5; i++){
                                if(i <= x){
                                    document.getElementById(i).classList.add('light');
                                }
                                else{
                                    document.getElementById(i).classList.remove('light');
                                }
                            }
                        }
                    </script>
               </div> 
               
               
            
        </div>

<?php get_footer();  ?>