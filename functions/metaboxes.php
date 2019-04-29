<?php
function mos_child_metaboxes() {
    $forms = get_formadable_form_list();
    $pages_id = get_all_pages_list_with_id ();
    $pages_link = get_all_pages_list_with_link ();
    $prefix = '_mosacademy_child_';

    $team_details = new_cmb2_box(array(
        'id' => $prefix.'project_details',
        'title' => __( 'Project Details', 'cmb2' ),
        'object_types'  => array( 'page' ), // Post type 
    )); 
    $team_field_id = $team_details->add_field( array(
        'id'          => 'wiki_test_repeat_group',
        'type'        => 'group',
        'description' => __( 'Generates reusable form entries', 'cmb2' ),
        'options'     => array(
            'group_title'   => __( 'Entry {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'    => __( 'Add Another Entry', 'cmb2' ),
            'remove_button' => __( 'Remove Entry', 'cmb2' ),
            'sortable'      => true, // beta
            // 'closed'     => true, // true to have the groups closed by default
        ),
    ));
    $team_details->add_group_field( $team_field_id, array(
        'name' => 'Entry Title',
        'id'   => 'title',
        'type' => 'text',
        //'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ));  
    $team_details->add_group_field( $team_field_id, array(
        'name' => 'Description',
        'description' => 'Write a short description for this entry',
        'id'   => 'description',
        'type' => 'textarea_small',
    ));  
}
add_action('cmb2_admin_init', 'mos_child_metaboxes');