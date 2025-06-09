<?php get_header(); ?>

<div class="container-fluid">
   
    <!-- showing title of taxonomy term -->
    <?php $term = get_queried_object();  ?>
  
    <!-- showing title of taxonomy term -->
    <div class="row">
        <div class="left-sidebar">
            <?php wp_list_categories( array(
                    'orderby'    => 'name',
                    'taxonomy' => 'centralpoint_category',
                    'show_count' => false,
                
            ) ); ?> 
        </div>

        <div class="right-content-box">
            <?php get_template_part('template-parts/content', 'header'); ?>
              <h2 class="post_type-posts-title"><?php echo 'Central Points - ' . $term->name; // will show the name ?></h2>
            <section class="post_type-posts">
                
            <?php 
                  //get the post's venues
                  $custom_terms = wp_get_post_terms($post->ID, 'centralpoint_category');
               
                  if( $custom_terms ){
                    // going to hold our tax_query params
                    $tax_query = array();

                    // loop through venus and build a tax query
                    foreach( $custom_terms as $custom_term ) {
                        $tax_query[] = array(
                            'taxonomy' => 'centralpoint_category',
                            'field' => 'slug',
                            'terms' => $custom_term->slug,
                            
                        );
                    }

                    $paged_tax = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                    // put all the WP_Query args together
                    $args = array( 'post_type' => 'centralpoint',
                    'posts_per_page' => 6,
                    'paged' => $paged_tax,
                    'tax_query' => $tax_query
                    );

                    // finally run the query
                    $loop = new WP_Query($args);

                    if( $loop->have_posts() ) {
                        while( $loop->have_posts() ) : $loop->the_post(); ?>
                        <article class="post_type-posts-article">
                            <div class="flexing">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="gavel" class="svg-inline--fa fa-gavel fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M504.971 199.362l-22.627-22.627c-9.373-9.373-24.569-9.373-33.941 0l-5.657 5.657L329.608 69.255l5.657-5.657c9.373-9.373 9.373-24.569 0-33.941L312.638 7.029c-9.373-9.373-24.569-9.373-33.941 0L154.246 131.48c-9.373 9.373-9.373 24.569 0 33.941l22.627 22.627c9.373 9.373 24.569 9.373 33.941 0l5.657-5.657 39.598 39.598-81.04 81.04-5.657-5.657c-12.497-12.497-32.758-12.497-45.255 0L9.373 412.118c-12.497 12.497-12.497 32.758 0 45.255l45.255 45.255c12.497 12.497 32.758 12.497 45.255 0l114.745-114.745c12.497-12.497 12.497-32.758 0-45.255l-5.657-5.657 81.04-81.04 39.598 39.598-5.657 5.657c-9.373 9.373-9.373 24.569 0 33.941l22.627 22.627c9.373 9.373 24.569 9.373 33.941 0l124.451-124.451c9.372-9.372 9.372-24.568 0-33.941z"></path></svg>
                                <!-- content -->
                                <div class="article-content">
                                    <h3 class="post_type-posts-post-title"><?php the_title();?></h3>     
                                    
                                    <!-- replace with the excerpt -->
                                    <?php the_excerpt(); ?>
                                    <a class="btn btn-primary" href="<?php the_permalink(); ?>">Read More</a>

                                </div>

                            </div>
                        </article>

                      

                        <?php 

                        endwhile;

                    }

                   

                    } ?>
                      <div class="post_type-pagination">
                            <?php $big = 999999999; // need an unlikely integer

                            echo paginate_links( array(
                                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                'format' => '?paged=%#%',
                                'current' => max( 1, get_query_var('paged') ),
                                'total' => $loop->max_num_pages
                            ) );?>
                                
                        </div>


            </section>
        </div>
    </div>
</div>
<?php get_footer(); ?>