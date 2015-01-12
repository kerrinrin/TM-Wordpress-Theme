<?php
/**
*Template Name: Category Index
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

                    <ul class="main-cat-grid">
                        <?php 
                        
                         $i = 0;
                         $up = true;
                        //go through each category and assign it to cat// 
                            foreach ( get_categories() as $cat ):
                               
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
                          
                            echo '<li>';
                                echo '<a href="'. get_category_link($cat->term_id) . '">';
                               
                              
                                //custom query, cat will be the cat currently the loop is on, 1 post each
                          $my_query = new WP_Query( 'category_name='. $cat->cat_name . '&posts_per_page=1' );

                            while ( $my_query->have_posts() ) : $my_query->the_post();
                            //stuff to get from that post from cat   
                            the_post_thumbnail('category-index');

                            endwhile;
                                
                                echo '<h4><span class="color-' . $i . '">'. $cat->cat_name . '</span></h4>';
                            
                                 echo '</a>';
                                echo '</li>'; 
                             
                            endforeach;
                        
                        
                        ?>
                        
                        
                    </ul>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
