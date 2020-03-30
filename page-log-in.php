<?php 

session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: ".site_url('/java'));
    exit;
}
require_once "config.php";

$username = $password = "";
$username_err = $password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty(trim($_POST["log-email"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["log-email"]);
    }

    if(empty(trim($_POST["log-pass"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["log-pass"]);
    }

    if(empty($username_err) && empty($password_err)){
        $sql = "SELECT user_id, email, password FROM users WHERE email = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            $param_username = $username;
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if($password = $hashed_password){
                            session_start();
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username; 

                            header("location: ".site_url('/java'));

                        }
                        else{
                            $password_err = "The password you entered was not valid.";

                        }
                    }

                }
                else{
                    $username_err = "No account found with that username.";
                }
            }
            else{
                echo "Oops! Something went wrong. Please try again later.";

            }
            mysqli_stmt_close($stmt);
        }
    }
    mysqli_close($link);
}





get_header(); ?>
<!-- <div id="banner">
        <h1>&lt;Cooding School /&gt;</h1>
        <h3>Learn coding from courses</h3>
    </div> -->

    <main>
        
        <h2 class="section-heading" style="margin-top: 100px;">Sign in</h2>
            <section>
            <div style="width: 100%;  margin-bottom: 50px;">
                <div style = "width: 250px; margin: auto;">
                <form action="<?php echo site_url('/log-in'); ?>" method="post">
                    <?php echo $username_err." ".$password_err; ?>
                    <input name="log-email" placeholder="E-mail" type = "email" style = "width: 200px; margin-bottom: 10px; margin-top:10px; text-align: center;" >
                    <input name="log-pass" placeholder="Password" type = "password" style = "width: 200px; margin-bottom: 10px; text-align: center;">
                    <button style="width: 232px; height: 40px;">Sign In</button>
                    <br><a href="<?php echo site_url('/register'); ?>" style = "margin-top: 20px;">You don't have account?</a>
                </form>
                </div>
                
            </div>
                <style>
                    body{
                        font-family: 'Roboto', sans-serif;
                        margin: 0;
                    }
                    a:hover{
                        color: red;
                    }
                    button{
                        font-size: 20px;
                        margin-bottom: 20px;
                        background: black;
                        color: white;
                        transition: 0.4s;
                    }
                    button:hover{
                        color: red;
                        cursor: pointer;
                        transition: 0.4s;
                        
                    }
                </style>
                
            </section>
<?php get_footer(); ?>