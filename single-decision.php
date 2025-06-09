<?php get_header(); ?>
    <?php get_template_part('template-parts/content', 'header'); ?>
    <!-- start loop -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <section class="post_type-single-section">
            <article class=" post_type-single-article container">
                <h1> <?php the_title(); ?></h1>

                 <!-- storing metabox fields in variables -->
                 <?php 
                    $bothering = get_post_meta( get_the_ID(), 'bothering', true );
                    $worst_case = get_post_meta( get_the_ID(), 'worst_case', true );
                    $root_cause = get_post_meta( get_the_ID(), 'root_cause', true );
                    $likely_case = get_post_meta( get_the_ID(), 'likely_case', true );
                    $best_case = get_post_meta( get_the_ID(), 'best_case', true );
                    $possible_solutions = get_post_meta( get_the_ID(), 'possible_solutions', true );
                    $recommended_solution = get_post_meta( get_the_ID(), 'recommended_solution', true );


                 ?>
                <div class="post_type-single-article-content">
                <?php if ($bothering==""): ?>            
                <?php else: ?>
                    <h3>What is bothering me? <br> If possible gather all the data you can on the problem</h3>
                    <p><?php echo  $bothering ; ?></p>
                <?php endif ?>
                    
                <?php if ($worst_case==""): ?>            
                <?php else: ?>
                    <h3>What are some of the worst case senarios you can think off?</h3>
                    <p><?php echo  $worst_case; ?></p>
                <?php endif ?>

                <?php if ($root_cause==""): ?>            
                <?php else: ?>
                    <h3>What might be the root cause of the problem</h3>
                    <p><?php echo  $root_cause; ?></p>
                <?php endif ?>

                <?php if ($likely_case==""): ?>            
                <?php else: ?>
                    <h3>What is the likely to happen scenario?</h3>
                    <p><?php echo $likely_case; ?></p>
                <?php endif ?>

                <?php if ($best_case==""): ?>            
                <?php else: ?>
                    <h3>What is the best case scenario?</h3>
                    <p><?php echo  $best_case ?></p>
                <?php endif ?>

                <?php if ($possible_solutions==""): ?>            
                <?php else: ?>
                    <h3>What are the possible solutions?</h3>
                    <p> <?php echo $possible_solutions ; ?></p>
                <?php endif ?>

                <?php if ($recommended_solution ==""): ?>            
                <?php else: ?>
                    <h3>Which is the recommended solution?</h3>
                    <p><?php echo $recommended_solution ; ?></p>    
                <?php endif ?>

     
                   
    
                </div>
                
            </article>
        </section>
       
        


    <?php endwhile;  ?>
    <?php endif; ?>
    <!-- end loop -->


    <?php get_template_part('template-parts/content', 'footer'); ?>
<?php get_footer(); ?>