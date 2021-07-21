<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package master
 */

?>
	<footer id="colophon" class="site-footer centered">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-8 col-md-8">
					<div class="site-info">
						<?php
						$master_copyright_text = get_theme_mod( 'master-copyright-text', __( 'Copyright All Rights Reserved', 'master' ) );
						?>
						<span class="copyright"><?php echo esc_html($master_copyright_text); ?></span>
						</br>
						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'master' ) ); ?>">
							<?php
							/* translators: %s: CMS name, i.e. WordPress. */
							printf( esc_html__( 'Proudly powered by %s', 'master' ), 'WordPress' );
							?>
						</a>
						<span class="sep copyright text-muted"> | </span>
							<?php
							/* translators: 1: Theme name, 2: Theme author. */
							printf( esc_html__( 'Theme: %1$s by %2$s.', 'master' ), 'Master', '<a href="http://www.wpentire.com/">WPEntire</a>' );
							?>
					</div><!-- .site-info -->
				</div>
				<div class="col-lg-4 col-md-4">
					<nav class="footer-socials" role="navigation">
					    <?php
						    if (has_nav_menu('social-menu')) {
			                    wp_nav_menu( array(
									'theme_location' => 'social-menu',
									'menu_id'        => 'social-media-footer',
									'container' => 'ul',
									'menu_class'      => 'social-links-menu',
							));
						}
		                ?>
					</nav>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>