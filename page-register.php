<?php  include('server.php') ?>
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
                    <?php   include('errors.php');  ?>
                        <input name="email" placeholder="E-mail" type = "email" style = "width: 200px; margin-bottom: 10px; margin-top:10px;" >
                        <input name="password_1" placeholder="Password" type = "password" style = "width: 200px; margin-bottom: 10px;">
                        <input name="password_2" placeholder="Confirm password" type = "password" style = "width: 200px; margin-bottom: 10px;">
                        <input name="name" placeholder="Your name" type = "text" style = "width: 200px; margin-bottom: 10px;">
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