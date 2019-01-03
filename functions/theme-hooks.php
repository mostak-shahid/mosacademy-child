<?php
// add_action( 'action_before_footer', 'bottom_section_fnc', 10, 1 );
// function bottom_section_fnc ($page_details) {
//  get_template_part( 'template-parts/section', 'bottom' );
// }

// add_action( 'wp_head', 'remove_theme_actions' );
// function remove_theme_actions () {
//  remove_action( 'action_contact_page_form', 'contact_info', 5 );
//  remove_action( 'action_contact_page_form', 'form_generator', 10 );
//  remove_action( 'action_team_archive_page', 'team_archive_page_fnc', 10 );
// }
function child_text_layout_manager () {
    global $mosacademy_options;
    //Custom Service
    if ($mosacademy_options['sections-cservices-text-layout'] == 'container-fliud-spacing') {
        add_action( 'action_before_cservices', 'start_container_fluid', 10, 1 );
        add_action( 'action_before_cservices', 'start_row', 11, 1 );
        add_action( 'action_before_cservices', 'start_container_col_10', 12, 1 );

        add_action( 'action_after_cservices', 'end_div', 10, 1 );
        add_action( 'action_after_cservices', 'end_div', 11, 1 );
        add_action( 'action_after_cservices', 'end_div', 12, 1 );   
    } elseif ($mosacademy_options['sections-cservices-text-layout'] == 'container-fliud') {
        add_action( 'action_before_cservices', 'start_container_fluid', 10, 1 );
        add_action( 'action_after_cservices', 'end_div', 10, 1 );
    } elseif ($mosacademy_options['sections-cservices-text-layout'] == 'container-full') {
        add_action( 'action_before_cservices', 'start_full_width', 10, 1 );
        add_action( 'action_after_cservices', 'end_div', 10, 1 );
    } else {
        add_action( 'action_before_cservices', 'start_container', 10, 1 );
        add_action( 'action_after_cservices', 'end_div', 10, 1 );
    }
}





