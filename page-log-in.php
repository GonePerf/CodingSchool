<?php get_header(); ?>
<!-- <div id="banner">
        <h1>&lt;Cooding School /&gt;</h1>
        <h3>Learn coding from courses</h3>
    </div> -->

    <main>
        
        <h2 class="section-heading" style="margin-top: 100px;">Sign in</h2>
            <section>
            <div style="width: 100%;  margin-bottom: 50px;">
                <div style = "width: 250px; margin: auto;">
                    <input name="login" placeholder="E-mail" type = "email" style = "width: 200px; margin-bottom: 10px; margin-top:10px;" >
                    <input name="password" placeholder="Password" type = "password" style = "width: 200px; margin-bottom: 10px;">
                    <button style="width: 200px; height: 40px; background: none;">Login</button>
                    <br><a href="<?php echo site_url('/register'); ?>" style = "margin-top: 20px;">You don't have account?</a>
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