<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package master
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
	<div class="entry-content">
		<div class="col-lg-12 col-md-12">
          <div class="post-heading">
          	<h1><?php the_title(); ?></h1>
            <div class="entry-meta">
					<?php
					master_posted_on();
					master_posted_by();
					?>
				</div><!-- .entry-meta -->
				<?php master_post_thumbnail(); ?>
          </div>
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'master' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'master' ),
				'after'  => '</div>',
			)
		);
		?>
		        </div>

	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
