
<?php 

    add_action( 'cmb2_admin_init', 'cmb2_goal_metaboxes' );
    /**
     * Define the metabox and field configurations.
     */
    function cmb2_goal_metaboxes() {

        /**
         * Initiate the metabox
         */

        // specific box and fields
        $goal_specific = new_cmb2_box( array(
            'id'            => 'goal_specific_metabox',
            'title'         => __( 'Specific Goal Details', 'cmb2' ),
            'object_types'  => array( 'goal'  ), // Post type
            'context'       => 'normal',
            'priority'      => 'high',
            'show_names'    => true, // Show field names on the left
            // 'cmb_styles' => false, // false to disable the CMB stylesheet
            // 'closed'     => true, // Keep the metabox closed by default
        ) );

        $goal_specific->add_field( array(
            'name' => 'What do I want to accomplish?',
            'desc' => '',
            'default' => '',
            'id' => 'what_textarea',
            'type' => 'textarea'
        ) );
        $goal_specific->add_field( array(
            'name' => 'Why do I want to achieve this goal?',
            'desc' => '',
            'default' => '',
            'id' => 'why_textarea',
            'type' => 'textarea'
        ) );

        $goal_specific->add_field( array(
            'name' => 'Who is involved in this goal?',
            'desc' => '',
            'default' => '',
            'id' => 'who_textarea',
            'type' => 'textarea'
        ) );
      

        $goal_specific->add_field( array(
            'name' => 'Where is this goal to be achieved?',
            'desc' => '',
            'default' => '',
            'id' => 'where_textarea',
            'type' => 'textarea'
        ) );

        $goal_specific->add_field( array(
            'name' => 'When do I want to achieve this goal?',
            'desc' => '',
            'default' => '',
            'id' => 'when_textarea',
            'type' => 'textarea'
        ) );


        // measurable box and fields
        $goal_measurable = new_cmb2_box( array(
            'id'            => 'goal__measurable_metabox',
            'title'         => __( 'Measurable Goal Details', 'cmb2' ),
            'object_types'  => array( 'goal'  ), // Post type
            'context'       => 'normal',
            'priority'      => 'high',
            'show_names'    => true, // Show field names on the left
            // 'cmb_styles' => false, // false to disable the CMB stylesheet
            // 'closed'     => true, // Keep the metabox closed by default
        ) );

        $goal_measurable->add_field( array(
            'name' => 'How much/many?',
            'desc' => '',
            'default' => '',
            'id' => 'much_many_textarea',
            'type' => 'textarea'
        ) );

        $goal_measurable->add_field( array(
            'name' => 'How do I know if I have reached my goal?',
            'desc' => '',
            'default' => '',
            'id' => 'reaching_goal_textarea',
            'type' => 'textarea'
        ) );

        $goal_measurable->add_field( array(
            'name' => 'What is my indicator of progress?',
            'desc' => '',
            'default' => '',
            'id' => 'indicator_textarea',
            'type' => 'textarea'
        ) );

  
        // achievable box and fields
        $goal_achievable = new_cmb2_box( array(
            'id'            => 'goal_achievable_metabox',
            'title'         => __( 'Achievable Goal Details', 'cmb2' ),
            'object_types'  => array( 'goal'  ), // Post type
            'context'       => 'normal',
            'priority'      => 'high',
            'show_names'    => true, // Show field names on the left
            // 'cmb_styles' => false, // false to disable the CMB stylesheet
            // 'closed'     => true, // Keep the metabox closed by default
        ) );

        $goal_achievable->add_field( array(
            'name' => 'Do I have the resources and capabilities to achieve the goal? If not what I am missing?',
            'desc' => '',
            'default' => '',
            'id' => 'resources_textarea',
            'type' => 'textarea'
        ) );

        $goal_achievable->add_field( array(
            'name' => 'Have others done it successfully before, if yes what strategies have they used to do so?',
            'desc' => '',
            'default' => '',
            'id' => 'role_modelling_textarea',
            'type' => 'textarea'
        ) );

         // realistic box and fields
        $goal_realistic = new_cmb2_box( array(
            'id'            => 'goal_realistic_metabox',
            'title'         => __( 'Realistic/Relevant Goal Details', 'cmb2' ),
            'object_types'  => array( 'goal'  ), // Post type
            'context'       => 'normal',
            'priority'      => 'high',
            'show_names'    => true, // Show field names on the left
            // 'cmb_styles' => false, // false to disable the CMB stylesheet
            // 'closed'     => true, // Keep the metabox closed by default
        ) );

        $goal_realistic->add_field( array(
            'name' => 'Is this goal realistic and within reach?',
            'desc' => '',
            'default' => '',
            'id' => 'realistic_textarea',
            'type' => 'textarea'
        ) );

        $goal_realistic->add_field( array(
            'name' => 'Is this goal reachable given the time and resources?',
            'desc' => '',
            'default' => '',
            'id' => 'reachable_textarea',
            'type' => 'textarea'
        ) );

        $goal_realistic->add_field( array(
            'name' => 'Is this goal relevant to your other goals, how it can relate?',
            'desc' => '',
            'default' => '',
            'id' => 'relevant_textarea',
            'type' => 'textarea'
        ) );

        // timely box and fields
        $goal_timely = new_cmb2_box( array(
            'id'            => 'goal_timely_metabox',
            'title'         => __( 'Timely Goal Details', 'cmb2' ),
            'object_types'  => array( 'goal'  ), // Post type
            'context'       => 'normal',
            'priority'      => 'high',
            'show_names'    => true, // Show field names on the left
            // 'cmb_styles' => false, // false to disable the CMB stylesheet
            // '
        ) );



        $goal_timely->add_field( array(
            'name' => 'Does my goal has a deadline, by when do I want to achieve the goal?',
            'id'   => 'dealine_textarea',
            'type' => 'text_date',
            // 'timezone_meta_key' => 'wiki_test_timezone',
            'date_format' => 'j F Y',
        ) );

        // Add other metaboxes as needed

        // timely box and fields
        $goal_pain_pleasure = new_cmb2_box( array(
            'id'            => 'goal_pain_pleasure_metabox',
            'title'         => __( 'Pain and Pleasure Goal Details', 'cmb2' ),
            'object_types'  => array( 'goal'  ), // Post type
            'context'       => 'normal',
            'priority'      => 'high',
            'show_names'    => true, // Show field names on the left
            // 'cmb_styles' => false, // false to disable the CMB stylesheet
            // '
        ) );

        $goal_pain_pleasure->add_field( array(
            'name' => 'Why I keep procrastinate?',
            'desc' => '',
            'default' => '',
            'id' => 'procrastination_textarea',
            'type'    => 'wysiwyg',
        ) );

        $goal_pain_pleasure->add_field( array(
            'name' => 'Which pain or pains have a linked?',
            'desc' => '',
            'default' => '',
            'id' => 'relevant_pains_textarea',
            'type'    => 'wysiwyg',
        ) );

        $goal_pain_pleasure->add_field( array(
            'name' => 'What pleasure or pleasures have I gained by not taking action?',
            'desc' => '',
            'default' => '',
            'id' => 'relevant_pleasures_textarea',
            'type'    => 'wysiwyg',
        ) );

        $goal_pain_pleasure->add_field( array(
            'name' => 'What will be the cost if I dont change or take action?',
            'desc' => '',
            'default' => '',
            'id' => 'relevant_cost_textarea',
            'type'    => 'wysiwyg',
        ) );

        $goal_pain_pleasure->add_field( array(
            'name' => 'What pleasures I will gain by following through?',
            'desc' => '',
            'default' => '',
            'id' => 'gained_pleasures_textarea',
            'type'    => 'wysiwyg',
        ) );


    }


?>