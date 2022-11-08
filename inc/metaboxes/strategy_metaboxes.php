
<?php 

    add_action( 'cmb2_admin_init', 'cmb2_strategy_metaboxes' );
    /**
     * Define the metabox and field configurations.
     */
    function cmb2_strategy_metaboxes() {

        /**
         * Initiate the metabox
         */

        // specific box and fields
        $strategy = new_cmb2_box( array(
            'id'            => 'strategy_metabox',
            'title'         => __( 'SWOT Strategy', 'cmb2' ),
            'object_types'  => array( 'strategy'  ), // Post type
            'context'       => 'normal',
            'priority'      => 'high',
            'show_names'    => true, // Show field names on the left
            // 'cmb_styles' => false, // false to disable the CMB stylesheet
            // 'closed'     => true, // Keep the metabox closed by default
        ) );

        $strategy->add_field( array(
            'name' => 'Strenghts',
            'desc' => '',
            'default' => '',
            'id' => 'strenghts',
            'type'    => 'wysiwyg',
        ) );

        $strategy->add_field( array(
            'name' => 'Weaknesses',
            'desc' => '',
            'default' => '',
            'id' => 'weaknesses',
            'type'    => 'wysiwyg',
        ) );

        $strategy->add_field( array(
            'name' => 'Opportunities',
            'desc' => '',
            'default' => '',
            'id' => 'opportunities',
            'type'    => 'wysiwyg',
        ) );

        $strategy->add_field( array(
            'name' => 'Threats',
            'desc' => '',
            'default' => '',
            'id' => 'threats',
            'type'    => 'wysiwyg',
        ) );
      

        // strategy analysis boxes
        $strategy_analysis = new_cmb2_box( array(
            'id'            => 'strategy_analysis_metabox',
            'title'         => __( 'SWOT Strategy Analysis', 'cmb2' ),
            'object_types'  => array( 'strategy'  ), // Post type
            'context'       => 'normal',
            'priority'      => 'high',
            'show_names'    => true, // Show field names on the left
            // 'cmb_styles' => false, // false to disable the CMB stylesheet
            // 'closed'     => true, // Keep the metabox closed by default
        ) );

        // How to take advantage of your strenghts
        $strategy_analysis->add_field( array(
            'name' => 'How to take advantage of your strenghts',
            'desc' => '',
            'default' => '',
            'id' => 'strengths_analysis',
            'type'    => 'wysiwyg',
        ) );

        // How to take improve or minimize your weaknesses
        $strategy_analysis->add_field( array(
            'name' => 'How to take improve or minimize your weaknesses',
            'desc' => '',
            'default' => '',
            'id' => 'weaknesses_analysis',
            'type'    => 'wysiwyg',
        ) );

        // How to take advantage of your opportunities
        $strategy_analysis->add_field( array(
            'name' => 'How to take advantage of your opportunities',
            'desc' => '',
            'default' => '',
            'id' => 'opportunities_analysis',
            'type'    => 'wysiwyg',
        ) );

        // How to prevent threats from happening
        $strategy_analysis->add_field( array(
            'name' => 'How to prevent threats from happening',
            'desc' => '',
            'default' => '',
            'id' => 'threats_analysis',
            'type'    => 'wysiwyg',
        ) );

        $strategy_analysis->add_field( array(
            'name' => 'What is your finalized Strategy',
            'desc' => '',
            'default' => '',
            'id' => 'finalized_strategy',
            'type'    => 'wysiwyg',
        ) );

    }
?>