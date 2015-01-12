<?php
/**
 * Template Name: Home
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			
                    <div class="intro"><?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				

			<?php endwhile; // end of the loop. ?>

            <div id="arrow">
                <a href="<?php get_site_url(); ?>/all-categories/">
                    <img src="<?php bloginfo('template_directory'); ?>/images/rightarrowhov.png" width="100%">
                    <img class="top" src="<?php bloginfo('template_directory'); ?>/images/rightarrow.png" width="100%">
                </a>
            </div> 
                        
                    </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php /*get_sidebar();*/ ?>
<?php get_footer(); ?>
