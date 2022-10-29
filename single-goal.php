<?php get_header(); ?>

    <!-- start loop -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <section class="post_type-single-section">
            <article class=" post_type-single-article container">
                <h1> <?php the_title(); ?></h1>
                <div class="post_type-single-article-content">
                    <?php // the_content(); ?>

                    <!-- storing metabox fields in variables -->
                    <?php 
                    
                        // specific goal fields
                        $why  = get_post_meta( get_the_ID(), 'why_textarea', true );
                        $who = get_post_meta( get_the_ID(), 'who_textarea', true );
                        $what  = get_post_meta( get_the_ID(), 'what_textarea', true );
                        $where = get_post_meta( get_the_ID(), 'where_textarea', true );
                        $when  = get_post_meta( get_the_ID(), 'when_textarea', true );


                        // measurable goal fields
                        $much_many = get_post_meta( get_the_ID(), 'much_many_textarea', true );
                        $reaching_goal  = get_post_meta( get_the_ID(), 'reaching_goal_textarea', true );
                        $indicator = get_post_meta( get_the_ID(), 'indicator_textarea', true );


                        // achievable goal fields
                        $resources = get_post_meta( get_the_ID(), 'resources_textarea', true );
                        $role_modelling = get_post_meta( get_the_ID(), 'role_modelling_textarea', true );
                    

                        // realistic - relevant goal fields
                        $realistic_ = get_post_meta( get_the_ID(), 'realistic_textarea', true );
                        $reachable  = get_post_meta( get_the_ID(), 'reachable_textarea', true );
                        $relevant = get_post_meta( get_the_ID(), 'relevant_textarea', true );

                        // pain and pleasures goal fields
                        $procrastination = get_post_meta( get_the_ID(), 'procrastination_textarea', true );
                        $relevant_pains = get_post_meta( get_the_ID(), 'relevant_pains_textarea', true );
                        $relevant_pleasures = get_post_meta( get_the_ID(), 'relevant_pleasures_textarea', true );
                        $relevant_costs = get_post_meta( get_the_ID(), 'relevant_cost_textarea', true );
                        $gained_pleasures = get_post_meta( get_the_ID(), 'gained_pleasures_textarea', true );
                        
                        // timely goal fields
                        $dealine = get_post_meta( get_the_ID(), 'dealine_textarea', true );

                           
                    
                    ?>

                    <section class="specific">
             
                        <h2>Specific</h2>
                        
                        <?php if ($what==""): ?>            
                        <?php else: ?>
                            <h3>What do I want to accomplish?</h3>
                            <p><?php echo esc_html( $what ); ?></p>
                        <?php endif ?>
                        
                        <?php if ($why==""): ?>            
                        <?php else: ?>
                            <h3>Why do I want to achieve this goal?</h3>
                            <p><?php echo esc_html( $why ); ?></p>     
                        <?php endif ?>

                        <?php if ($who==""): ?>            
                        <?php else: ?>
                            <h3>Who is involved in this goal?</h3>
                        <p><?php echo esc_html( $who ); ?></p>
                        <?php endif ?>

                        <?php if ($where==""): ?>            
                        <?php else: ?>
                            <h3>Where is this goal to be achieved?</h3>
                            <p><?php echo esc_html( $where ); ?></p>
                        <?php endif ?>


                        <?php if ($when==""): ?>            
                        <?php else: ?>
                            <h3>When do I want to achieve this goal?</h3>
                            <p><?php echo esc_html( $when ); ?></p>  
                        <?php endif ?>
                              


                    </section>

                    <section class="measurable">
                        <h2>Measurable</h2>

                        <?php if ($much_many==""): ?>            
                        <?php else: ?>
                            <h3>How much/how many?</h3>
                            <p><?php echo esc_html( $much_many ); ?></p>
                        <?php endif ?>

                        <?php if ($reaching_goal==""): ?>            
                        <?php else: ?>
                            <h3>How do I know if I have reached my goal?</h3>
                            <p><?php echo esc_html( $reaching_goal ); ?></p>
                        <?php endif ?>

                        <?php if ($indicator ==""): ?>            
                        <?php else: ?>
                            <h3>What is my indicator of progress?</h3>
                            <p><?php echo esc_html(  $indicator ); ?></p>
                        <?php endif ?>
    
                    </section>

                    <section class="achievable">
                        <h2>Achievable</h2>
                        <?php if ($resources ==""): ?>            
                        <?php else: ?>
                            <h3>Do I have the resources and capabilities to achieve this goal? If not what I am missing?</h3>
                            <p><?php echo esc_html( $resources ); ?></p>
                        <?php endif ?>

                        <?php if ($role_modelling ==""): ?>            
                        <?php else: ?>
                            <h3>Have others done it successfully before, if yes what strategies have they used?</h3>
                            <p><?php echo esc_html( $role_modelling ); ?></p>
                        <?php endif ?>
                        
                        
                    </section>

                    <section class="pain_pleasure">
                        <h2>Goal Pain and Pleasures</h2>
                        <?php if ($procrastination ==""): ?>            
                        <?php else: ?>
                            <h3>Why I keep procrastinate?</h3>
                            <p><?php echo  $procrastination ; ?></p>
                        <?php endif ?>

                        <?php if ($relevant_pains ==""): ?>            
                        <?php else: ?>
                            <h3>Which pain have I linked in the past?</h3>
                            <p><?php echo $relevant_pains ; ?></p>
                        <?php endif ?>

                        <?php if ($relevant_pleasures ==""): ?>            
                        <?php else: ?>
                            <h3>What pleasure or pleasures have I gained by not taking action?</h3>
                            <p><?php echo $relevant_pleasures; ?></p>
                        <?php endif ?>

                        <?php if ($relevant_costs ==""): ?>            
                        <?php else: ?>
                            <h3>What will be the cost if I don't change or take action?</h3>
                            <p><?php echo $relevant_costs; ?></p>
                        <?php endif ?>

                        <?php if ($gained_pleasures ==""): ?>            
                        <?php else: ?>
                            <h3>What pleasures I will gain by following through?</h3>
                            <p><?php echo $gained_pleasures; ?></p>
                        <?php endif ?>
                    </section>

                    <section class="timely">
                        <h2>Timely</h2>
                        <?php if ($dealine ==""): ?>            
                        <?php else: ?>
                            <h3>By when do I want to achieve this goal?</h3>
                        <p><?php echo esc_html($dealine ); ?></p>
                        <?php endif ?>
                      
                    </section>



                </div>
                
            </article>
        </section>
       
        


    <?php endwhile;  ?>
    <?php endif; ?>
    <!-- end loop -->



<?php get_footer(); ?>