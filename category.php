<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Trenton Makes
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
                   
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title"> ', '</h1>' );
					
				?>
			</header><!-- .page-header -->
                     
                        
                         
                           
			<?php /* Start the Loop */
                        
                         $i = 0;
                         $up = true;
                         
                         ?>
			<?php while ( have_posts() ) : the_post();
                        
                        
                         if($up) {
                               
                                    if($i < 4) {
                                        $i++;

                                    }
                                    else {
                                    $up = false;
                                    }
                           }
                           
                           else {
                               
                                    if($i > 0) {
                                        $i--;
                                    }

                                    else {
                                         $up = true;
                                    }
                            }
                        
                        ?> 
                        <div class="box">
                        
                        <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('category-index');?> 
                        <?php echo '<span class="caption fade-caption color-'. $i . '">'; ?>
                        
                        <?php the_title('<h3>', '</h3>');?>
                        <?php the_excerpt('<p>','</p>');?>
                            
                            </span>  
                        </a>  
                        </div>   
			  	

			<?php endwhile; ?>
                      
                 
                        
                        
                  
                        
			<?php trenton_makes_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
