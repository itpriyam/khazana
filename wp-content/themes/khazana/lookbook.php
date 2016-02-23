<?php
/* Template Name: Look Book */

get_header(); ?>
<div id="primary" class="content-area full-width">
	<main id="main" class="site-main" role="main">
    	<div class="innerBanner">
            <div class="site lookBookSlider">
                <div class="sliderBanner owlCarousel">
                    <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/lookbook-banner1.jpg" alt="Banner"></div>
                    <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/lookbook-banner1.jpg" alt="Banner"></div>
                    <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/lookbook-banner1.jpg" alt="Banner"></div>
                    <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/lookbook-banner1.jpg" alt="Banner"></div>
                </div>		
            </div>
        </div>
        <div class="lookbookSection">
        	<h2 class="sectionTitle">LIVING ROOM LOOK</h2>
            <div class="innerBanner">
            <div class="site lookBookSlider">
                <div class="sliderBanner owlCarousel">
                    <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/lookbook-banner2.jpg" alt="LIVING ROOM LOOK"></div>
                    <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/lookbook-banner2.jpg" alt="LIVING ROOM LOOK"></div>
                    <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/lookbook-banner2.jpg" alt="LIVING ROOM LOOK"></div>
                    <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/lookbook-banner2.jpg" alt="LIVING ROOM LOOK"></div>
                </div>		
            </div>
        </div>
        </div>
        <div class="lookbookSection">
        	<h2 class="sectionTitle">DINING ROOM LOOK</h2>
            <div class="innerBanner">
            <div class="site lookBookSlider">
                <div class="sliderBanner owlCarousel">
                    <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/lookbook-banner3.jpg" alt="DINING ROOM LOOK"></div>
                    <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/lookbook-banner3.jpg" alt="DINING ROOM LOOK"></div>
                    <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/lookbook-banner3.jpg" alt="DINING ROOM LOOK"></div>
                    <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/lookbook-banner3.jpg" alt="DINING ROOM LOOK"></div>
                </div>		
            </div>
        </div>
        </div>
        <div class="lookbookSection">
        	<h2 class="sectionTitle">BED ROOM LOOK</h2>
            <div id="lookbookData"></div>
            <div class="loadMoreDiv"><a class="loadMore" href="#">EXPLORE MORE LOOKS</a></div>
        </div>
        
        <script type="text/javascript">
			jQuery.ajaxSetup({cache:false});
			//var i = 1
			jQuery(".loadMore").click(function(){
				var post_link = '<?php echo get_template_directory_uri(); ?>/lookbookdata.php';
				jQuery.ajaxSetup({url: post_link , success: function(result){
					jQuery("#lookbookData").append(result);
					jQuery(".ajaxBanner").owlCarousel({
						loop:true,
						autoplay:true,
						autoplayTimeout:3000,
						smartSpeed:1200,
						nav:false,
						items : 1,
						//dots : false		
					});
				}});
				jQuery.ajax();
				jQuery(".loadMore").hide()
				//i++;
				return false;
			});
        </script>
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			//get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_footer(); ?>
