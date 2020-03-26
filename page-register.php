<?php get_header();

$_SESSION['message'] = '';

$mysqli = new mysqli('localhost','root','root','local');

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if($_POST['password_1'] == $_POST['password_2']){
        $email = $mysqli->real_escape_string($_POST['email']);
        $password = md5($_POST['password_1']);
        $name = $mysqli->real_escape_string($_POST['name']);

        $sql = "INSERT INTO users (email, pass, username, c1, c2, c3, c4)
             VALUES ('$email', '$password', '$name', 0, 0, 0, 0)";

        if($mysqli->query($sql) == true){
            $_SESSION['message'] = 'Account has been created!';
            header("location: welcome.php");
        }

    }


}



?>
<!-- <div id="banner">
        <h1>&lt;Cooding School /&gt;</h1>
        <h3>Learn coding from courses</h3>
    </div> -->

    <main>
        
        <h2 class="section-heading" style="margin-top: 100px;">Registration</h2>
            <section>
            <div style="width: 100%;  margin-bottom: 50px;">
                <div id="inputs" style = "width: 250px; margin:auto;">
                    <form method="post">
                    <?php   $_SESSION['message']  ?>
                        <input required name="email" placeholder="E-mail" type = "email" style = "width: 200px; margin-bottom: 10px; margin-top:10px;" >
                        <input required name="password_1" placeholder="Password" type = "password" style = "width: 200px; margin-bottom: 10px;">
                        <input required name="password_2" placeholder="Confirm password" type = "password" style = "width: 200px; margin-bottom: 10px;">
                        <input required name="name" placeholder="Your name" type = "text" style = "width: 200px; margin-bottom: 10px;">
                        <button name="register" type="submit" style="width: 200px; height: 40px; background: none;">Submit</button>
                        <br><a href="<?php echo site_url('/log-in'); ?>" style = "margin-top: 20px;">You have account?</a>
                    </form>
                </div>
                
            </div>
                <style>
                    
                    body{
                        font-family: 'Roboto', sans-serif;
                        margin: 0;
                    }
                    input{
                        text-align: center;
                    }
                    a:hover{
                        color: red;
                    }
                    button{
                        font-weight: bold;
                        font-size: 20px;
                        margin-bottom: 20px;
                    }
                    button:hover{
                        color: red;
                        cursor: pointer;
                    }
                </style>
                
            </section>
<?php get_footer(); ?>