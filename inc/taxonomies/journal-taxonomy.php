<?php 

register_taxonomy('journal_category', ['journal'], [
    'label' => __('Categories', 'txtdomain'),
    'hierarchical' => true,
    'rewrite' => ['slug' => 'journal-category'],
    'show_admin_column' => true,
    'show_in_rest' => true,
    'labels' => [
        'singular_name' => __('Category', 'txtdomain'),
        'all_items' => __('All Categories', 'txtdomain'),
        'edit_item' => __('Edit Category', 'txtdomain'),
        'view_item' => __('View Category', 'txtdomain'),
        'update_item' => __('Update Category', 'txtdomain'),
        'add_new_item' => __('Add New Category', 'txtdomain'),
        'new_item_name' => __('New Category Name', 'txtdomain'),
        'search_items' => __('Search Categories', 'txtdomain'),
        'parent_item' => __('Parent Category', 'txtdomain'),
        'parent_item_colon' => __('Parent Category:', 'txtdomain'),
        'not_found' => __('No Category found', 'txtdomain'),
    ]
]);
register_taxonomy_for_object_type('journal_category', 'journal');


?>