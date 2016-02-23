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
</div>
<!-- .site-content -->
<footer id="colophon" class="site-footer" role="contentinfo">
  <div class="site">
    <?php if ( has_nav_menu( 'footer' ) ) : ?>
    <nav class="footer-navigation" role="navigation">
      <?php wp_nav_menu( array('theme_location' => 'footer', 'menu_class'  => 'footerLinks','depth' => 1)); ?>
    </nav>
    <div class="socialLinks">
        <a href="http://www.facebook.com/" class="fb">Facebook</a>
        <a href="http://instagram.com/" class="it">Instagram</a>
        <a href="http://www.twitter.com/" class="tw">Twitter</a>        
    </div>
    <?php endif; ?>
    <div class="site-info"> &copy; <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> <?php echo date("Y"); ?> </div>
    <!-- .site-info --> 
  </div>
</footer>
<!-- .site-footer -->
</div>
<?php wp_footer(); ?>
</body>
</html>