<?php 

session_start();
 



get_header();  ?>

<main>
        <h2 class="page-heading">Contact with me</h2>
        <div id="course-container">
            <section id="blogpost">
               <div class="course">
                   <div class="course-meta-blogspot">
                
                   </div>
                   <div class="course-image">
                       <img src="<?php echo get_template_directory_uri(); ?>/img/contact.jpg"  style="width: 95%;" alt="Course Image">
                   </div>
                   <div class="course-descrition">
                       <h3><i style="padding-left: 10px; padding-right: 10px;" class="fas fa-envelope"></i>konrad.gumienny@gmail.com</h3>
                       <h3><i style="padding-left: 10px; padding-right: 10px;" class="fas fa-phone"></i>+48 777 777 7</h3>
                        <?php  
                        
                        if(isset($_SESSION["loggedin"]) == true){
                            echo '
                            <div class="column">
                            <form action="/action_page.php">
                              <label for="fname">First Name</label>
                              <input type="text" id="fname" name="firstname" placeholder="Your name..">
                              <label for="lname">Last Name</label>
                              <input type="text" id="lname" name="lastname" placeholder="Your last name..">                              
                              <label for="subject">Subject</label>
                              <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
                              <button type="submit">Send</button>
                            </form>
                            </div>';
                        }
                        else {
                            echo '<h3><i style="font-size: 48px; padding-left: 10px; padding-right: 10px;" class="fas fa-lock"></i>Login to send opinion</h3>';
                        }      
                               ?>
                   </div>
               </div> 
               <style>
                   .column input,  textarea {
                        width: 100%;
                        padding: 12px;
                        border: 1px solid #ccc;
                        margin-top: 6px;
                        margin-bottom: 16px;
                        resize: vertical;
                    }
                    button {
                        background-color: white;
                        color: black;
                        width:220px;
                        height: 40px;
                        border: 1px solid black;
                        border-radius: 10px;
                        cursor: pointer;
                        text-align: center;
                        transition: 0.4s;
                        margin-bottom: 20px;
                        font-size: 20px;

                    }
                    button:hover {
                        box-shadow: inset 8px 3px 18px -4px rgba(0, 0, 0, 0.4);
                        color: red;
                        transition: 0.4s
                    }
               </style>
               
            </section>
            
        </div>

<?php get_footer();  ?>