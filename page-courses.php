<?php 
session_start();
get_header(); ?>
<main>
        <h2 class = "page-heading">All Courses</h2>
            <section>

                <div class="course">
                    <div class="course-image">
                        <a href="<?php echo site_url('/java'); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/java.jpg" alt="Java course">
                        </a>
                    </div>
                    <div class="course-description">
                        <a href="<?php echo site_url('/java'); ?>">
                            <h3>Java</h3>
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
                        <a href="<?php echo site_url('/java'); ?>" class="btn-readmore">Read more</a>
                    </div>
                </div>
                <div class="course">
                    <div class="course-image">
                        <a href="<?php echo site_url('/python'); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/python.jpg">
                        </a>
                    </div>
                    <div class="course-description">
                        <a href="<?php echo site_url('/python'); ?>">
                            <h3>Python</h3>
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
                        <a href="<?php echo site_url('/python'); ?>" class="btn-readmore">Read more</a>
                    </div>
                </div>
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
                        <a href="<?php echo site_url('/ai'); ?>" class="btn-readmore">Read more</a>
                    </div>
                </div>
                
            </section>
<?php get_footer(); ?>