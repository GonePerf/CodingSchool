<?php get_header(); ?>
<main>
        <h2 class="page-heading">
            Calculator
        </h2>
        <div id="course-container" style="margin-bottom: 40px; text-align: center;"> 
            <section id="blogpost">
               <div class="course">
                   
                   <div class="course-image">
                       
                   </div>
                    <?php echo do_shortcode('[pdfjs-viewer viewer_width=0 viewer_height=1000 url=http://localhost:10000/wp-content/uploads/2020/05/PROJECT_DESCRIPTION.pdf download=true print=true fullscreen=true fullscreen_text="View%20Fullscreen" zoom=150 ]'); ?>                    
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

                    /* a{
                        font-size: 30px;
                        transition: 0.4s;
                    } */
                    a:hover{
                        color: red;
                        transition: 0.4s;
                    }
                    </style>
                    
                    
               </div> 
               
               
            
        </div>

<!--  -->

<?php get_footer(); ?>