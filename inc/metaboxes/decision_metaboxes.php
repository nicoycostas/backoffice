
<?php 

    add_action( 'cmb2_admin_init', 'cmb2_decision_metaboxes' );
    /**
     * Define the metabox and field configurations.
     */
    function cmb2_decision_metaboxes() {

        /**
         * Initiate the metabox
         */

        // specific box and fields
        $decision = new_cmb2_box( array(
            'id'            => 'decision_metabox',
            'title'         => __( 'Decision Making & Problem Solving', 'cmb2' ),
            'object_types'  => array( 'decision'  ), // Post type
            'context'       => 'normal',
            'priority'      => 'high',
            'show_names'    => true, // Show field names on the left
            // 'cmb_styles' => false, // false to disable the CMB stylesheet
            // 'closed'     => true, // Keep the metabox closed by default
        ) );

        $decision->add_field( array(
            'name' => 'What is bothering me? Gather all the data you can on the situation.',
            'desc' => '',
            'default' => '',
            'id' => 'bothering',
            'type'    => 'wysiwyg',
        ) );

        $decision->add_field( array(
            'name' => 'What is the worst case scenario?',
            'desc' => '',
            'default' => '',
            'id' => 'worst_case',
            'type'    => 'wysiwyg',
        ) );

        $decision->add_field( array(
            'name' => 'What might be the root cause of the problem?',
            'desc' => '',
            'default' => '',
            'id' => 'root_cause',
            'type'    => 'wysiwyg',
        ) );

        $decision->add_field( array(
            'name' => 'What is the likely to happen scenario?',
            'desc' => '',
            'default' => '',
            'id' => 'likely_case',
            'type'    => 'wysiwyg',
        ) );

        $decision->add_field( array(
            'name' => 'What is the best case scenario?',
            'desc' => '',
            'default' => '',
            'id' => 'best_case',
            'type'    => 'wysiwyg',
        ) );


        $decision->add_field( array(
            'name' => 'What are the possible solutions?',
            'desc' => '',
            'default' => '',
            'id' => 'possible_solutions',
            'type'    => 'wysiwyg',
        ) );
      

        $decision->add_field( array(
            'name' => 'Which is the recommended solution?',
            'desc' => '',
            'default' => '',
            'id' => 'recommended_solution',
            'type'    => 'wysiwyg',
        ) );

    }


?>