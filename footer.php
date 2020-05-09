<!-- ADVERTISEMENT PLACE -->
<div id="custom-ad-bottom" class="ad-closed">
  <div id="close-ad">
     	Close Ad
  </div>
  <script>
  //close ad block
 
let closeAdButton = document.getElementById('close-ad'),
    adContainer = document.getElementById('custom-ad-bottom');
document.addEventListener('click', function(e){
  if (e.target == closeAdButton) {
    //window.scrollBy(0, 300);
    adContainer.classList.add('ad-closed');
    setTimeout(displayNone, 1000);
  };
});
    function displayNone() {
      document.getElementById('custom-ad-bottom').classList.add('display-none');
      console.log('class added');
    }
  </script>
  <!-- bottom ad container -->
    <div class="ad-container">
        <!-- <div id="ad-left" >Recomended for you:
            <i class="fas fa-chevron-right" style = "padding-left: 20px;"></i>
            <i class="fas fa-chevron-right"></i>
        </div>
        <div id="ad-right"><img src="<?php get_template_directory_uri() ?>/img/java.png" alt=""></div>
        <div id="ad-right">Read more <i class="fas fa-hand-pointer" style = "padding-left: 10px;" ></i></div> -->
                RECOMENDED COURSES
    </div>
  <!-- bottom /ad container -->
</div>
<footer>
                <div id="left-footer">
                    <h3>Quick Links</h3>
                    <ul>
                        <li>
                            <a href="<?php echo site_url(''); ?>">Home</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('/courses'); ?>">Courses</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('/projects'); ?>">Projects</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('/contact'); ?>">Contact</a>
                        </li>
                    </ul>
                </div>

                <div id="right-footer">
                    <h3>Follow me on</h3>
                    <div id="social-media-footer">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/user/xVergiI/featured?disable_polymer=true">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/konrad-gumienny-295412199/">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <p>This website is developed by GonePerf &copy</p>
                </div>
            </footer>
    </main>
    <?php  wp_footer(); ?>
</body>
</html>