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
                
                require_once "config.php";
                if(isset($_GET['stars'])){
                                                    
                    $stars = $_GET['stars'];
                    $id = $_SESSION['id'];
                    $course_id = $_GET['course'];
                    $query = "UPDATE owned SET stars = '$stars' WHERE course_id = '$course_id' AND user_id = '$id'";
                    if(mysqli_query($link,$query)){
                    }
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

                        $owned = mysqli_query($link,"SELECT owned_id, stars FROM owned WHERE course_id = ".$_GET['course']." AND user_id = ".$_SESSION["id"]."");
                        if(mysqli_num_rows($owned) > 0){
                            $result = mysqli_query($link,"SELECT content FROM courses WHERE course_id = ".$_GET['course']."");
                            while ($row = $result->fetch_assoc()) {
                                echo $row['content'];
                            }
                            echo "<br> <h2>What do you think about this course?</h2>";
                            $stars = 0;
                            while ($row = $owned->fetch_assoc()) {
                                $stars = $row['stars'];
                                for($i = 1; $i <= 5; $i++){
                                    if($i <= $row['stars']){
                                      echo  "<i class='fas fa-star light' id = '".$i."' onclick='light(".$i.")' ></i>";

                                    }
                                    else{
                                        echo  "<i class='fas fa-star' id = '".$i."' onclick='light(".$i.")' ></i>";

                                    }
                                }
                            }
                            // "
                            // <i class='fas fa-star' id = '1' onclick='light(1)' ></i>
                            // <i class='fas fa-star' id = '2' onclick='light(2)'></i>
                            // <i class='fas fa-star' id = '3' onclick='light(3)'></i>
                            // <i class='fas fa-star' id = '4' onclick='light(4)'></i>
                            // <i class='fas fa-star' id = '5' onclick='light(5)'></i>
                            // 
                            echo "<i id = 'result'>( ".$stars."/5 )</i><button name='vote'  onclick=\"vote()\" type='submit' style='width: 232px; height: 40px;'>Vote</button>";
                        }
                        else{
                            echo "<button style='width:95%; text-align: center; margin: 10px;'><i class='fas fa-unlock-alt' style='margin-right: 15px;'></i>Get prime content</button>";
                        }
                    ?>
                    <style>
                        
                    pre.ql-syntax{
                        padding: 10px;
                        color: white;
                        background: black;
                        border-radius: 5px;
                        font-size: 15px;
                    }
                    .fa-star{
                        color: black;
                        padding: 10px;
                        padding-bottom: 30px;
                        font-size: 32px;
                    }
                    .light{
                        color: yellow;
                    }
                    
                    button{
                        font-size: 20px;
                        margin-bottom: 20px;
                        background: none;
                        border: 1px solid black;
                        color: black;
                        transition: 0.4s;
                        border-radius: 10px;
                        margin-left: 30px;
                    }
                    button:hover{
                        color: red;
                        box-shadow: inset 8px 3px 18px -4px rgba(0, 0, 0, 0.4);

                        cursor: pointer;
                        transition: 0.4s;
                    }

                    
                    </style>
                    <script>
                        var stars = 0;
                        function light(x){
                            stars = x;
                            for(var i = 1; i <= 5; i++){
                                if(i <= x){
                                    document.getElementById(i).classList.add('light');
                                    if(i == x){
                                        document.getElementById('result').innerHTML = "( " + i + "/5 )";
                                        
                                    }
                                }
                                else{
                                    document.getElementById(i).classList.remove('light');
                                }
                            }
                        }
                        function vote(){
                            window.location.href = "<?php echo site_url('/course-single?course='.$_GET['course'].'&stars='); ?>"+stars;
                        }
                        
                    </script>
                    
               </div> 
               
        </div>
        <?php 
        require_once "config.php";
        if(isset($_GET['stars'])){
                                            
            $stars = $_GET['stars'];
            $id = $_SESSION['id'];
            $course_id = $_GET['course'];
            $query = "UPDATE owned SET stars = '$stars' WHERE course_id = '$course_id' AND user_id = '$id'";
            if(mysqli_query($link,$query)){
            }
        }
        ?>

<?php get_footer();  ?>