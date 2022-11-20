<?php get_header(); ?>

<div class="container-fluid">
    <!-- showing title of taxonomy term -->
    <?php $term = get_queried_object();  ?>
    <h2 class="post_type-posts-title"><?php echo 'Goals - ' . $term->name; // will show the name ?></h2>
    <!-- showing title of taxonomy term -->
    <div class="row">
        <div class="left-sidebar col-2">
            <?php wp_list_categories( array(
                    'orderby'    => 'name',
                    'taxonomy' => 'decision_category',
                    'show_count' => false,
                
            ) ); ?> 
        </div>

        <div class="right-content-box col-10">
            <section class="post_type-posts">
                
            <?php 
                  //get the post's venues
                  $custom_terms = wp_get_post_terms($post->ID, 'goal_category');
               
                  if( $custom_terms ){
                    // going to hold our tax_query params
                    $tax_query = array();

                    // loop through venus and build a tax query
                    foreach( $custom_terms as $custom_term ) {
                        $tax_query[] = array(
                            'taxonomy' => 'goal_category',
                            'field' => 'slug',
                            'terms' => $custom_term->slug,
                            
                        );
                    }

                    $paged_tax = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                    // put all the WP_Query args together
                    $args = array( 'post_type' => 'goal',
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
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bullseye" class="svg-inline--fa fa-bullseye fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path fill="currentColor" d="M248 8C111.03 8 0 119.03 0 256s111.03 248 248 248 248-111.03 248-248S384.97 8 248 8zm0 432c-101.69 0-184-82.29-184-184 0-101.69 82.29-184 184-184 101.69 0 184 82.29 184 184 0 101.69-82.29 184-184 184zm0-312c-70.69 0-128 57.31-128 128s57.31 128 128 128 128-57.31 128-128-57.31-128-128-128zm0 192c-35.29 0-64-28.71-64-64s28.71-64 64-64 64 28.71 64 64-28.71 64-64 64z"></path></svg>
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