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
				<?php dynamic_sidebar( 'footer-1' ); ?>
				<?php do_shortcode('[gravityform id=1]');?>
				<div class="wrapper__social-media">
							<a href="<?php the_field( 'facebook_url', 'options' ); ?>">
								<img class="icon__header" src="<?php echo get_template_directory_uri(); ?>/assets/01_Icons/SVG/Facebook.svg" alt="icon-facebook">
							</a>
							<a href="<?php the_field( 'instagram_url', 'options' ); ?>">
								<img class="icon__header" src="<?php echo get_template_directory_uri(); ?>/assets/01_Icons/SVG/IG.svg" alt="icon-ig">
							</a>
							<a href="<?php the_field( 'twitter_url', 'options' ); ?>">
								<img class="icon__header" src="<?php echo get_template_directory_uri(); ?>/assets/01_Icons/SVG/Twitter.svg" alt="icon-twitter">
							</a>
							<a href="<?php the_field( 'youtube_url', 'options' ); ?>">
								<img class="icon__header" src="<?php echo get_template_directory_uri(); ?>/assets/01_Icons/SVG/Youtube.svg" alt="icon-youtube">
							</a>
						</div>
					<h4>Get in Touch</h4>
					<span class=link__footer>
						<a style="color: white;">Careers</a>
						<a style="color: white;">In the News</a>
						<a style="color: white;">Contact Us</a>
						
						<a><img class="icon__header" src="<?php echo get_template_directory_uri(); ?>/assets/01_Icons/SVG/Phone.svg" alt="icon-phone">
<?php the_field('phone_number', 'option'); ?></a>
						<a><img class="icon__header" src="<?php echo get_template_directory_uri(); ?>/assets/01_Icons/SVG/Signup.svg" alt="icon-envelope">
<?php the_field('email_link', 'option'); ?></a>
					</span>
					<h4>Additional Information</h4>
					<p class="p__white"><?php the_field('additional_information', 'option'); ?></p>

				</div><!-- .site-info -->
				<div class="copyright p__white">© 2017 | All rights reserved.</div>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
