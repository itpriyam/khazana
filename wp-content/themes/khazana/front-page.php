<?php
/* Template Name: Front Page */

get_header(); ?>
<div class="indexBanner">
	<div class="site">
		<img src="<?php echo get_template_directory_uri(); ?>/images/index-banner.jpg" alt="Banner">
    </div>
</div>
<div class="site">
<div id="primary" class="content-area full-width">
  <main id="main" class="site-main" role="main">
    <div class="introText">
      <p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT, SED DO EIUSMOD TEMPOR SIT<br>
        AMET UN MINIM  INCIDIDUNT UT LABORE ET DOLORE MAGNA ALIQUA.</p>
      <div class="btns"><a href="#" class="btn">Our Story</a></div> </div>
    <div class="featuredCollection">
    	<h2>FEATURED COLLECTION</h2>
        <p class="desc">Lorem ipsum dolor sit amet, consectetur</p>
        <?php echo do_shortcode('[featured_products per_page="4" columns="4"]'); ?>
        <div class="btns"><a href="#" class="btn">EXPLORE</a></div>
    </div>
    
     <div class="bestSeller">
    	<h2>OUR BESTSELLERS</h2>
        <p class="desc">Lorem ipsum dolor sit amet, consectetur</p>
        <?php echo do_shortcode('[best_selling_products per_page="4" columns="4"]'); ?> 
        <div class="btns"><a href="#" class="btn">EXPLORE</a></div>
    </div>
   </main> 
  <!-- .site-main --> 
</div>
</div>
<!-- .content-area -->
<?php get_footer(); ?>
