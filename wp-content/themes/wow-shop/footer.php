<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WOW_Shop
 */

?>
                </div><!-- col end -->
            </div><!-- row end -->
        </div><!-- container end -->
    </div><!-- #content -->
    

	<footer id="colophon" class="site-footer">
        <?php if(is_active_sidebar( 'footer' )) :?>
        <div class="footer-top-area">
            <div class="container">
                <div class="row">
                    <?php dynamic_sidebar( 'footer' ) ;?>
                </div>
            </div>
        </div>
        <?php endif;?>

		<div class="site-info">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wow-shop' ) ); ?>">
                            <?php
                            /* translators: %s: CMS name, i.e. WordPress. */
                            printf( esc_html__( 'Proudly powered by %s', 'wow-shop' ), 'WordPress' );
                            ?>
                        </a>
                        <span class="sep"> | </span>
                            <?php
                            /* translators: 1: Theme name, 2: Theme author. */
                            printf( esc_html__( 'Theme: %1$s by %2$s.', 'wow-shop' ), 'wow-shop', '<a href="http://champtheme.net">ChampTheme</a>' );
                            ?>
                    </div>

                    <div class="col-lg-4 text-right">
                        <div class="social-links">
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                            <a href=""><i class="fa fa-youtube"></i></a>
                            <a href=""><i class="fa fa-pinterast"></i></a>
                        </div>
                    </div>
                </div>
            </div>			
        </div><!-- .site-info -->
        
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
