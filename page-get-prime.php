<?php session_start(); get_header(); ?>
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
            $result = mysqli_query($link,"SELECT course_name FROM courses WHERE course_id = ".$_GET['course']."");
            while ($row = $result->fetch_assoc()) {
                echo "<b>".$row['course_name']."</b>";
                echo "<br><br>To get this course click<br>
                If you click buy, you accept the <a href=#>regulations</a>! <br> <br><button onclick='buyCourse()'>Buy $</button>
                </div>";
            }
        }
    ?>
    
<script>
    function buyCourse(){
        alert("Script for buying course");
        
    }
</script>
</section>
<style>
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