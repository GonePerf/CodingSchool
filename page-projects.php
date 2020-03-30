<?php
session_start();
get_header(); ?>
<main>
        <h2 class = "page-heading">Projects</h2>
            <section>

                <div class="course">
                    <div class="course-image">
                        <a href="<?php echo site_url('/somenote'); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/somenote.png" alt="SomeNote">
                        </a>
                    </div>
                    <div class="course-description">
                        <a href="<?php echo site_url('/somenote'); ?>">
                            <h3>SomeNote</h3>
                        </a>
                        <div class="course-meta">
                            Created by GonePerf
                        </div>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and
                     typesetting industry. Lorem Ipsum has been the 
                     industry's standard dummy text ever since the 1500s,
                      when an unknown printer took a galley of type and
                       scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and
                       typesetting industry. Lorem Ipsum has been the 
                       industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and
                         scrambled it to make a type specimen book.
                        </p>
                        <a href="<?php echo site_url('/somenote'); ?>" class="btn-readmore">Read more</a>
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
                            <h3>Advanced Calculator</h3>
                        </a>
                        <div class="course-meta">
                            Created by GonePerf
                        </div>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and
                     typesetting industry. Lorem Ipsum has been the 
                     industry's standard dummy text ever since the 1500s,
                      when an unknown printer took a galley of type and
                       scrambled it to make a type specimen book.
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
<?php get_footer(); ?>