    <!-- Footer Area -->
    <footer class="footer-area section-padding pb-90" style="background-image: url(assets/img/footer-map.png);">
        <div class="container">
            <div class="row">
                <!-- Single Footer Widget -->
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget footer-about">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/logo-2.png" alt="">
                        <p><?php dynamic_sidebar('footer-1');?></p>

                        <!-- Socila Links -->
                        <div class="social-links">
                            <ul>
                                <li><a href="https://www.facebook.com/sharer/sharer.php?u=&t=" title="Share on Facebook" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL)); return false;"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/intent/tweet?" target="_blank" title="Tweet" onclick="window.open('https://twitter.com/intent/tweet?text=%20Check%20up%20this%20awesome%20content' + encodeURIComponent(document.title) + ':%20 ' + encodeURIComponent(document.URL)); return false;"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="http://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=&source=" target="_blank" title="Share on LinkedIn" onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&url=' + encodeURIComponent(document.URL) + '&title=' + encodeURIComponent(document.title)); return false;"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <!-- //Socila Links -->
                    </div>
                </div>
                <!-- // Single Footer Widget -->
                <!-- Single Footer Widget -->
                <div class="col-lg-2 col-md-3 col-6">
                    <div class="footer-widget footer-nav">
						<ul>
                          <p><?php dynamic_sidebar('footer-2');?></p>
                        </ul>

                    </div>
                </div>
                <!-- // Single Footer Widget -->
                <div class="col-lg-2 col-md-3 col-6 ">
                    <div class="footer-widget footer-nav">
                    <p><?php dynamic_sidebar('footer-3');?></p>
                    </div>
                </div>
                <!-- // Single Footer Widget -->


                <!-- Single Footer Widget -->
                <div class="col-lg-4">
                    <div class="footer-widget footer-form">
                      
                        <!-- // Footer Title -->
                        <p><?php dynamic_sidebar('footer-4');?></p>
                        <form action="mailto:imranhasan7865@gmail.com">
                            <input type="email" name="email" required placeholder="Email">
                            <button type="submit">Send</button>
                        </form>
                    </div>
                </div>
                <!-- // Single Footer Widget -->

            </div>
        </div>
    </footer>
    <!-- // Footer Area -->

    <!-- copyright Area -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2020 – <?php echo date('Y'); ?> YourSite.com</p>
                </div>

                <div class="col-md-6">
                    <div class="footer-copyright-nav text-right">
                        <ul>
                         
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- // copyright Area -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  
  <?php wp_footer();?>
<script>new WOW().init();</script>

</body>

</html>