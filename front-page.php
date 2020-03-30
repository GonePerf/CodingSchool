<?php
session_start();

get_header(); ?>
    <div id="banner">
        <h1>&lt;Cooding School /&gt;</h1>
        <h3>Learn coding from courses</h3>
    </div>

    <main>
        <a href="<?php echo site_url('/courses'); ?>">
            <h2 class="section-heading">Courses</h2>
        </a>
            <section>
            

                
                <div class="course">
                    <div class="course-image">
                        <a href="<?php echo site_url('/htmlcss'); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/html.jpg">
                        </a>
                    </div>
                    <div class="course-description">
                        <a href="<?php echo site_url('/htmlcss'); ?>">
                            <h3>HTML + CSS</h3>
                        </a>
                        <p>
                        Launch a career as a web designer by learning HTML5, CSS3, responsive design, Sass, cross device compatibility and more!
                        </p>
                        <a href="<?php echo site_url('/htmlcss'); ?>" class="btn-readmore">Read more</a>
                    </div>
                </div>
                <div class="course">
                    <div class="course-image">
                        <a href="<?php echo site_url('/ai'); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/AI.jpg">
                        </a>
                    </div>
                    <div class="course-description">
                        <a href="<?php echo site_url('/ai'); ?>">
                            <h3>Artifical Inteligence</h3>
                        </a>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and
                     typesetting industry. Lorem Ipsum has been the 
                     industry's standard dummy text ever since the 1500s,
                      when an unknown printer took a galley of type and
                       scrambled it to make a type specimen book.
                        </p>
                        <a href="<?php echo site_url('/ai'); ?>" class="btn-readmore">Read more</a>
                    </div>
                </div>
                
            </section>

            <h2 class="section-heading">My Projects</h2>

            <section>

                <div class="course">
                    <div class="course-image">
                        <a href="<?php echo site_url('/somenote'); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/somenote.png" alt="Java course">
                        </a>
                    </div>
                    <div class="course-description">
                        <a href="<?php echo site_url('/somenote'); ?>">
                            <h3>SomeNote</h3>
                        </a>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and
                     typesetting industry. Lorem Ipsum has been the 
                     industry's standard dummy text ever since the 1500s,
                      when an unknown printer took a galley of type and
                       scrambled it to make a type specimen book.
                        </p>
                        <a href="<?php echo site_url('/somenote'); ?>l" class="btn-readmore">Read more</a>
                    </div>
                </div>
                <div class="course">
                    <div class="course-image">
                        <a href="<?php echo site_url('/calculator'); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/calculator.png">
                        </a>
                    </div>
                    <div class="course-description">
                        <a href="<?php echo site_url('/calculator'); ?>">
                            <h3>Advanced calculator</h3>
                        </a>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and
                     typesetting industry. Lorem Ipsum has been the 
                     industry's standard dummy text ever since the 1500s,
                      when an unknown printer took a galley of type and
                       scrambled it to make a type specimen book.
                        </p>
                        <a href="<?php echo site_url('/calculator'); ?>" class="btn-readmore">Read more</a>
                    </div>
                </div>
                
                
            </section>

            <h2 class="section-heading">Source Code</h2>

            <section id="section-source">
                <p>Lorem Ipsum is simply dummy text of the printing and
                     typesetting industry. Lorem Ipsum has been the 
                     industry's standard dummy text ever since the 1500s,
                      when an unknown printer took a galley of type and
                       scrambled it to make a type specimen book. </p>
                <a href="https://github.com/GonePerf" class="btn-readmore">GitHub Profile</a>
            </section>

<?php get_footer(); ?>          