<?php get_header(); ?>

<div class="container-fluid">

    <!-- showing title of taxonomy term -->
    <?php $term = get_queried_object();  ?>
    <h2 class="post_type-posts-title"><?php echo 'Notes - ' . $term->name; // will show the name ?></h2>
    <!-- showing title of taxonomy term -->
    <div class="row">
        <div class="left-sidebar col-2">
            <?php wp_list_categories( array(
                    'orderby'    => 'name',
                    'taxonomy' => 'note_category',
                    'show_count' => false,
                
            ) ); ?> 
        </div>

        <div class="right-content-box col-10">
            <section class="post_type-posts">
                
            <?php 
                  //get the post's venues
                  $custom_terms = wp_get_post_terms($post->ID, 'note_category');
               
                  if( $custom_terms ){
                    // going to hold our tax_query params
                    $tax_query = array();

                    // loop through venus and build a tax query
                    foreach( $custom_terms as $custom_term ) {
                        $tax_query[] = array(
                            'taxonomy' => 'note_category',
                            'field' => 'slug',
                            'terms' => $custom_term->slug,
                            
                        );
                    }

                    $paged_tax = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                    // put all the WP_Query args together
                    $args = array( 'post_type' => 'note',
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
                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="sticky-note" class="svg-inline--fa fa-sticky-note fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M448 348.106V80c0-26.51-21.49-48-48-48H48C21.49 32 0 53.49 0 80v351.988c0 26.51 21.49 48 48 48h268.118a48 48 0 0 0 33.941-14.059l83.882-83.882A48 48 0 0 0 448 348.106zm-128 80v-76.118h76.118L320 428.106zM400 80v223.988H296c-13.255 0-24 10.745-24 24v104H48V80h352z"></path></svg>
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