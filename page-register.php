<?php 
    require_once "config.php";

    $email = $password = $confirm_password = "";
    $email_err = $password_err = $confirm_password_err = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty(trim($_POST["email"]))) {
            $username_err = "Please enter a email.";
        }
        else {
            $sql = "SELECT email FROM users WHERE username = ?";
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_username);
                $param_username = trim($_POST["email"]);
                if(mysqli_stmt_execute($stmt)){
                    /* store result */
                    mysqli_stmt_store_result($stmt);
                    
                    if(mysqli_stmt_num_rows($stmt) == 1){
                        $username_err = "This username is already taken.";
                    } else{
                        $username = trim($_POST["username"]);
                    }
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
                mysqli_stmt_close($stmt);
            }
        }
    }

// $_SESSION['message'] = '';

// session_start();

// $mysqli = mysqli_connect('remotemysql.com','vNUkda7PJi','BrgbpTWV2C','vNUkda7PJi');
// if (mysqli_connect_errno()){
//     echo "Failed to connect to MySQL: " . mysqli_connect_error();
// }

// if(isset($_POST['register-btn'])){

//     if($_POST['reg-password_1'] == $_POST['reg-password_2']){
        
//         $email = mysqli_real_escape_string($mysqli, $_POST['reg-email']);
//         $password = mysqli_real_escape_string($mysqli, $_POST['reg-password_1']);
//         $name = mysqli_real_escape_string($mysqli, $_POST['reg-name']);
        
//         $sql = "INSERT INTO users(email, password, name, c1, c2, c3, c4)
//              VALUES('$email', '$password', '$name', 0, 0, 0, 0)";

        
//         if(mysqli_query($mysqli,$sql)){
//             echo "KONTO UTWORZONE";
//         }
//         else {
//             echo mysqli_error($mysqli);
//         }

//     }


// }


get_header();
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
                    <form method="post" action="<?php echo site_url('/register'); ?>">
                    <?php   $_SESSION['message']  ?>
                        <input required name="reg-email" placeholder="E-mail" type = "email" style = "width: 200px; margin-bottom: 10px; margin-top:10px;" >
                        <input required name="reg-password_1" placeholder="Password" type = "password" style = "width: 200px; margin-bottom: 10px;">
                        <input required name="reg-password_2" placeholder="Confirm password" type = "password" style = "width: 200px; margin-bottom: 10px;">
                        <input required name="reg-name" placeholder="Your name" type = "text" style = "width: 200px; margin-bottom: 10px;">
                        <button name="register-btn" type="submit" style="width: 200px; height: 40px; background: none;">Submit</button>
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