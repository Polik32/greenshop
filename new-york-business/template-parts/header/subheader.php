<?php
global $new_york_business_option;
if(!$new_york_business_option['home_header_section_disable'] && !is_front_page()){
	new_york_business_sub_header();
}
function new_york_business_sub_header() {
	global $post;
	$url='';
	$homeLink = esc_url( home_url() );
?> 	
	<div class="sub-header" style="background:url('<?php echo esc_url(get_header_image()); ?>');background-attachment: fixed;">
	
	<div class="sub-header-inner sectionoverlay">
	<?php
	
	if(is_search()){
		echo '<div class="title">'. esc_html__('Search Results','new-york-business').'</div>';
	} else if( is_404() ){
		echo '<div class="title">'. esc_html__('Page not Found','new-york-business').'</div>';
	} else if( is_archive() || is_category() ){
		echo '<div class="title">'. wp_kses_post(get_the_archive_title()).'</div>';
	} else if( is_single() ){
		echo  the_title('<div class="title">', '</div>');
	} else if(is_front_page() || is_home() ){
		echo '<div class="title">'. wp_kses_post(get_bloginfo( 'name' )) .'</div>';
	} else {
	    echo  the_title('<div class="title">', '</div>');
	}

	?>
	</div>
</div><!-- .sub-header -->
<?php 
}