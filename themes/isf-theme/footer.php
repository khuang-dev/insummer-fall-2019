<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info content__footer">
				<div class="icon__scroll-up-bg"><button><i class="fas fa-chevron-up icon__scroll-up"></i></button></div>
				
				<section class="wrapper__footer-signup">
				<?php dynamic_sidebar( 'footer-1' ); ?>
				<div class="wrapper__social-media footer__social-media">
							<a href="<?php the_field( 'facebook_url', 'options' ); ?>">
								<img class="icon__header" src="<?php echo get_template_directory_uri(); ?>/assets/white-icon/Facebook.png" alt="icon-facebook">
							</a>
							<a href="<?php the_field( 'instagram_url', 'options' ); ?>">
								<img class="icon__header" src="<?php echo get_template_directory_uri(); ?>/assets/white-icon/IG.png" alt="icon-ig">
							</a>
							<a href="<?php the_field( 'twitter_url', 'options' ); ?>">
								<img class="icon__header" src="<?php echo get_template_directory_uri(); ?>/assets/white-icon/Twitter.png" alt="icon-twitter">
							</a>
							<a href="<?php the_field( 'youtube_url', 'options' ); ?>">
								<img class="icon__header" src="<?php echo get_template_directory_uri(); ?>/assets/white-icon/Youtube.png" alt="icon-youtube">
							</a>
						</div>
				</section>

					<section class="wrapper__get-in-touch">
					<h4>Get in Touch</h4>
					<span class=link__footer>
						<a style="color: white;">Careers</a>
						<a style="color: white;">In the News</a>
						<a style="color: white;">Contact Us</a>
						
						<a><img class="icon__header" src="<?php echo get_template_directory_uri(); ?>/assets/white-icon/Phone.png" alt="icon-phone">
							<?php the_field('phone_number', 'option'); ?></a>
						<a><img class="icon__header" src="<?php echo get_template_directory_uri(); ?>/assets/white-icon/Mail.png" alt="icon-envelope">
							<?php the_field('email_link', 'option'); ?></a>
					</span>
					</section>	

					<section class="wrapper__additional-information">
					<h4>Additional Information</h4>
					<p class="p__white"><?php the_field('additional_information', 'option'); ?></p>
					</section>

				</div><!-- .site-info -->
				<p class="copyright p__white">© 2017 | All rights reserved.</p>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
