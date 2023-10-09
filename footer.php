

        <footer class="footer">
			<div class="shell footer__shell">
				<div class="footer__locations">
					<div class="footer__location">
						<p>La Grenouille</p>
						
						<a href="tel:41323415586">Tel. +41 32 341 55 86</a>
						
						<a href="mailto:info@lagrenouille.ch">info@lagrenouille.ch</a>
						
						<ul>
							<li>
								<a href="#">
									<img src="<?= get_template_directory_uri() ?>/assets/images/svg/instagram-icon.svg" alt="">
								</a>
							</li>
							
							<li>
								<a href="#">
									<img src="<?= get_template_directory_uri() ?>/assets/images/svg/facebook-icon.svg" alt="">
								</a>
							</li>
						</ul>
					</div><!-- /.footer__location -->
					
					<div class="footer__location">
						<p>Incubo</p>
						
						<a href="tel:41323333333">Tel. +41 32 333 33 33</a>
						
						<a href="mailto:info@incubo.ch">info@incubo.ch</a>
						
						<ul>
							<li>
								<a href="#">
									<img src="<?= get_template_directory_uri() ?>/assets/images/svg/instagram-icon.svg" alt="">
								</a>
							</li>
							
							<li>
								<a href="#">
									<img src="<?= get_template_directory_uri() ?>/assets/images/svg/facebook-icon.svg" alt="">
								</a>
							</li>
						</ul>
					</div><!-- /.footer__location -->
				</div><!-- /.footer__locations -->
		
				<div class="footer__nav">
					<nav class="nav-footer">
						<?php wp_nav_menu([
								'theme_location' => 'footer_'.explode('-', get_bloginfo('language'))[0],
								'container' => '',
								'fallback_cb' => false
							]);
						?>
					</nav><!-- /.nav-footer -->
				</div><!-- /.footer__nav -->
				
				<div class="footer__newsletter">
					<p><?php _e('subscribe', 'biotop'); ?></p>
					
					<a href="<?php the_field('newsletter_page', 'option'); ?>">
						<h2>Newsletter</h2>
					</a>
				</div><!-- /.footer__newsletter -->
			</div><!-- /.shell -->
		</footer><!-- /.footer -->
	</div><!-- /.wrapper -->

	<?php wp_footer(); ?> 

    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/vendor/jquery-3.6.3.min.js"></script>
	<script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/vendor/infiniteslidev2.min.js"></script>
    <script type="module" crossorigin src="<?= get_template_directory_uri() ?>/assets/app23.js"></script>

	<script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-106145121-1', 'auto');
        ga('send', 'pageview');

    </script>
	
</body>
</html>