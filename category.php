<?php get_header(); ?>
    <div class="container-fluid">
        <?php $term = get_queried_object();  ?>
        
      
        <div class="row">
            <!-- sidebar  -->
            <div class="left-sidebar">
                <?php wp_list_categories( array(
                    'orderby'    => 'name',
                   
                    'show_count' => false,
                    
                ) ); ?> 
            </div>

            <div class="right-content-box">
                <section class="post_type-posts">
                    <?php get_template_part('template-parts/content', 'header'); ?>
                      <h2 class="post_type-posts-title"><?php echo 'Articles - ' . $term->name; // will show the name ?></h2>
                    <!-- articles loop -->
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <article class="post_type-posts-article">
                            <div class="flexing">                
                                <!-- title -->
                                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="newspaper" class="svg-inline--fa fa-newspaper fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M552 64H112c-20.858 0-38.643 13.377-45.248 32H24c-13.255 0-24 10.745-24 24v272c0 30.928 25.072 56 56 56h496c13.255 0 24-10.745 24-24V88c0-13.255-10.745-24-24-24zM48 392V144h16v248c0 4.411-3.589 8-8 8s-8-3.589-8-8zm480 8H111.422c.374-2.614.578-5.283.578-8V112h416v288zM172 280h136c6.627 0 12-5.373 12-12v-96c0-6.627-5.373-12-12-12H172c-6.627 0-12 5.373-12 12v96c0 6.627 5.373 12 12 12zm28-80h80v40h-80v-40zm-40 140v-24c0-6.627 5.373-12 12-12h136c6.627 0 12 5.373 12 12v24c0 6.627-5.373 12-12 12H172c-6.627 0-12-5.373-12-12zm192 0v-24c0-6.627 5.373-12 12-12h104c6.627 0 12 5.373 12 12v24c0 6.627-5.373 12-12 12H364c-6.627 0-12-5.373-12-12zm0-144v-24c0-6.627 5.373-12 12-12h104c6.627 0 12 5.373 12 12v24c0 6.627-5.373 12-12 12H364c-6.627 0-12-5.373-12-12zm0 72v-24c0-6.627 5.373-12 12-12h104c6.627 0 12 5.373 12 12v24c0 6.627-5.373 12-12 12H364c-6.627 0-12-5.373-12-12z"></path></svg>

                                <div class="article-content">
                                    <h3><?php the_title(); ?></h3>
                                    <?php the_excerpt(); ?>
                                    <!-- button learn more -->
                                    <a class="btn btn-primary" href="<?php the_permalink(); ?>">Read Mode</a>
                                </div>
                            </div>                
                        </article>
                
                        

                    <?php endwhile; ?>
                    <?php endif; ?>
                                
                    

                    <div class="post_type-pagination">
                            <?php the_posts_pagination( array( 'mid_size' => 2, 'screen_reader_text' => ' ' ) ); ?>
                    </div> 
                   
        
                </section>
            </div>
        </div>
    </div>

<?php get_footer(); ?>