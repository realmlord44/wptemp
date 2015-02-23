<?php
/**
 * @package Duster
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php if ( is_active_sidebar( 'sidebar-3' ) || is_active_sidebar( 'sidebar-4' ) || is_active_sidebar( 'sidebar-5' ) ) : ?>
			<div id="supplementary" <?php babystore_footer_sidebar_class(); ?>>
				<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
				<div id="first" class="widget-area" role="complementary">
					<?php dynamic_sidebar( 'sidebar-3' ); ?>
				</div><!-- #first .widget-area -->
				<?php endif; ?>

				<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
				<div id="second" class="widget-area" role="complementary">
					<?php dynamic_sidebar( 'sidebar-4' ); ?>
				</div><!-- #second .widget-area -->
				<?php endif; ?>

				<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
				<div id="third" class="widget-area" role="complementary">
					<?php dynamic_sidebar( 'sidebar-5' ); ?>
				</div><!-- #third .widget-area -->
				<?php endif; ?>
			</div><!-- #supplementary -->
			<?php endif; ?>

			<div id="site-generator">
				<?php printf( __( 'Theme by %1$s.', 'babystore' ), '<a href="http://thedragondesigns.com/" rel="designer">TheDragonDesigns</a>' ); ?>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>