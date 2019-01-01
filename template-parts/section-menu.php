<?php 
global $mosacademy_options;
$animation = $mosacademy_options['sections-menu-animation'];
$animation_delay = ( $mosacademy_options['sections-menu-animation-delay'] ) ? $mosacademy_options['sections-menu-animation-delay'] : 0;
$title = $mosacademy_options['sections-menu-title'];
$content = $mosacademy_options['sections-menu-content'];

$page_details = array( 'id' => get_the_ID(), 'template_file' => basename( get_page_template() ));
do_action( 'action_avobe_menu', $page_details ); 
?>
<section id="section-menu" <?php if ($animation) echo 'data-wow-delay="'.$animation_delay.'s" class="wow '.$animation.'"' ?>>
	<div class="content-wrap">
		
		<?php 
		/*
		* action_before_menu hook
		* @hooked start_container 10 (output .container)
		*/
		do_action( 'action_before_menu', $page_details ); 
		?>
				<?php if ($title) : ?>				
					<div class="title-wrapper">
						<h2 class="title"><?php echo do_shortcode( $title ); ?></h2>				
					</div>
				<?php endif; ?>
				<?php if ($content) : ?>				
					<div class="content-wrapper"><?php echo do_shortcode( $content ) ?></div>
				<?php endif; ?>
		<?php 
		/*
		* action_after_menu hook
		* @hooked end_div 10 
		*/
		do_action( 'action_after_menu', $page_details ); 
		?>	
	</div>
</section>
<?php do_action( 'action_below_menu', $page_details  ); ?>