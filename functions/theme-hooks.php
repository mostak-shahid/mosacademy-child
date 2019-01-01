<?php
//add_action( 'action_before_title', 'start_container', 10, 1 );
//add_action( 'action_before_title', 'banner_form_generate_fnc', 20, 1 );
//add_action( 'action_before_title', 'end_div', 30, 1 );
function banner_form_generate_fnc () {
    echo do_shortcode( '[banner-form title="Your Life. Your Future. Together, Our Property Journey."]' );
}
//add_action( 'action_below_service', 'project_section_fnc', 10, 1 );
function project_section_fnc () {
	get_template_part( 'template-parts/section', 'project' );
}
add_action( 'action_below_service', 'support_section_fnc', 20, 1 );
function support_section_fnc ($page_details) {
    $avoid_pages = array(14);
    if (!in_array($page_details['id'], $avoid_pages)) {
	   get_template_part( 'template-parts/section', 'support' );
    }
}
add_action( 'action_below_service', 'buyer_section_fnc', 15, 1 );
function buyer_section_fnc ($page_details) {
	$avoid_pages = array(29, 28, 26, 25, 23);
	if (!in_array($page_details['id'], $avoid_pages)) {
		get_template_part( 'template-parts/section', 'buyer' );
	}
}
add_action( 'action_before_footer', 'bottom_section_fnc', 10, 1 );
function bottom_section_fnc ($page_details) {
	get_template_part( 'template-parts/section', 'bottom' );
}

add_action( 'wp_head', 'remove_theme_actions' );
function remove_theme_actions () {
	remove_action( 'action_contact_page_form', 'contact_info', 5 );
	remove_action( 'action_contact_page_form', 'form_generator', 10 );
    remove_action( 'action_team_archive_page', 'team_archive_page_fnc', 10 );
}

add_action( 'action_below_team_page', 'start_section_team', 5 );
add_action( 'action_below_team_page', 'start_container_fluid', 10 );
add_action( 'action_below_team_page', 'start_row', 15 );
add_action( 'action_below_team_page', 'team_archive_page_fnc', 20 );
add_action( 'action_below_team_page', 'end_div', 25 );
add_action( 'action_below_team_page', 'end_div', 30 );
add_action( 'action_below_team_page', 'end_section', 35 );

add_action( 'action_contact_page_form', 'custom_contact_info', 10 );
function custom_contact_info () {
	global $mosacademy_options;
    $contact_phone = $mosacademy_options['contact-phone'];
    $contact_email = $mosacademy_options['contact-email'];
    $contact_address = $mosacademy_options['contact-address']; 
    if ( is_plugin_active( 'mos-image-alt/mos-image-alt.php' ) ) {
		$alt_tag = mos_alt_generator(get_the_ID());
	} 
    ?>
    <div class="row">
    	<div class="col-md-4">
    		<div class="info-wrapper">
    			<div class="display-inline-block">
    				<div class="contact-address">
    					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/contact-location-icon.png" alt="<?php echo $alt_tag['inner'] ?>Location Icon">
    					<?php echo $contact_address ?>
    				</div>
    			</div>
    		</div>
    	</div>
    	<div class="col-md-4">
    		<div class="info-wrapper">
    			<div class="display-inline-block">
    				<div class="contact-phone">
    					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/contact-location-icon-phone-icon.png" alt="<?php echo $alt_tag['inner'] ?>Phone Icon">
    					<a href="tel:<?php echo str_replace(' ', '', $contact_phone); ?>"><span class="hidden-md hidden-lg">Tap to Call</span><span class="hidden-xs hidden-sm"><?php echo $contact_phone ?></span></a>
    				</div>
    			</div>
    		</div>
    	</div>
    	<div class="col-md-4">
    		<div class="info-wrapper">
    			<div class="display-inline-block">
    				<div class="contact-email">
    					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/contact-location-email-icon.png" alt="<?php echo $alt_tag['inner'] ?>Email Icon">
    					<a href="mailto:<?php echo $contact_email ?>"><?php echo $contact_email ?></a>
    				</div>
    			</div>
    		</div>
    	</div>
    </div> 
    <?php
}
add_action( 'action_below_contact_page', 'start_section_contact', 10, 1 );
add_action( 'action_below_contact_page', 'start_container', 20, 1 );
add_action( 'action_below_contact_page', 'form_generator', 30, 1 );
add_action( 'action_below_contact_page', 'end_div', 40, 1 );
add_action( 'action_below_contact_page', 'end_section', 50, 1 );
function start_section_contact () {
    ?>
    <section id="section-contact">
        <div class="content-wrap">

    <?php 
}
function start_section_team () {
	?>
	<section id="section-team">
		<div class="content-wrap">

	<?php 
}
function end_section () {
	?>
		</div>
	</section>
	<?php
}




