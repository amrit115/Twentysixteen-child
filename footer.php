<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->
 
 
    <footer id="colophon" class="site-footer" role="contentinfo">
		<?php
    /* The footer widget area is triggered if any of the areas
     * have widgets. So let's check that first.
     *
     * If none of the sidebars have widgets, then let's bail early.
     */
    if (   ! is_active_sidebar( 'first-footer-widget-area'  )
        && ! is_active_sidebar( 'second-footer-widget-area' )
        && ! is_active_sidebar( 'third-footer-widget-area'  )
        && ! is_active_sidebar( 'fourth-footer-widget-area' )
    )
    	return;?>

        <aside class="fatfooter" role="complementary">
    <div class="first quarter left widget-area">
        <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
    </div><!-- .first .widget-area -->
 
    <div class="second quarter widget-area">
        <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
    </div><!-- .second .widget-area -->
 
    <div class="third quarter widget-area">
        <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
    </div><!-- .third .widget-area -->
 
    <div class="fourth quarter right widget-area">
        <?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
    </div><!-- .fourth .widget-area -->
</aside><!-- #fatfooter -->

<div class="site-info">
				<?php
					/**
					 * Fires before the twentysixteen footer text for footer customization.
					 *
					 * @since Twenty Sixteen 1.0
					 */
					do_action( 'twentysixteen_credits' );
				?>
				<span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
				<a href="<?php echo esc_url( __( 'https://amritbanjara.com.np/', 'twentysixteen' ) ); ?>"><?php printf( __( 'Designed By: %s', 'twentysixteen' ), 'Amrit Banjara' ); ?></a>
			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'social',
							'menu_class'     => 'social-links-menu',
							'depth'          => 1,
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>',
						) );
					?>
				</nav><!-- .social-navigation -->
			<?php endif; ?>

			</div><!-- .site-info -->
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->
<div> this is test</div>

<?php wp_footer(); ?>
</body>
</html>
