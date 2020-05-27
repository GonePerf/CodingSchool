<?php session_start(); 
if(isset($_POST['addOwner'])){
    $sql = "INSERT INTO `owned` (`owned_id`, `user_id`, `course_id`, `stars`) 
        VALUES (NULL, ".$_SESSION['id'].", ".$_GET['course'].", '0')";
    require_once "config.php";
    $result = mysqli_query($link,$sql);
    if($result) {
        header("location: ".site_url('/course-single?course='.$_GET['course']));
        exit;
    }
    else{
        echo mysqli_error($link);
    }
}
get_header(); ?>
<h2 class = "page-heading">Thank you for interesting</h2>
<main>
<section>
    <div style="height: 300px; font-size: 20px; text-align: center;">
    <?php
        require_once "config.php";
        if($_GET['course'] > 4){
            echo "Błąd!";
        }
        else{   
            $result = mysqli_query($link,"SELECT course_name FROM courses WHERE course_id = ".$_GET['course']);
            while ($row = $result->fetch_assoc()) {
                echo "<b>".$row['course_name']."</b>";
                echo "<br><br>To get this course click<br>
                If you click buy, you accept the <a href=#>regulations</a>!
                 <br> <br><form action='' method = 'POST' >
                  <input name = 'addOwner'  id='change' style = 'float: right; width: 45%; height: 40px;' type = 'submit' value = 'Buy $' />
                  </form>
                </div>";
            }
        }

        
    ?>
    
<script>
    // function buyCourse(){
    //     alert("Script for buying course");
    //     var x = "";
    //     if(x) alert("zrobione");
    // }
</script>
</section>
<style>
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
a{
    color: red;
    
}
button{
    width: 200px;
    font-size: 20px;
    margin-bottom: 20px;
    background: white;
    border: 1px solid black;
    border-radius: 10px;
    color: black;
    transition: 0.4s;
}
button:hover{
    color: red;
    box-shadow: inset 8px 3px 18px -4px rgba(0, 0, 0, 0.4);
    cursor: pointer;
    transition: 0.4s;
}
</style>
<?php get_footer();  ?>