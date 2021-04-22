<?php

$easy_storefront_default_settings = new new_york_business_settings();
$easy_storefront_option = wp_parse_args(  get_option( 'new_york_business_option', array() ) , $easy_storefront_default_settings->default_data());

$easy_storefront_class = '';
$easy_storefront_bottom_color = esc_attr( $easy_storefront_option['footer_section_bottom_background_color'] );

$easy_storefront_class = $easy_storefront_class. ' footer-foreground';

$easy_storefront_option['footer_section_background_color'] = '#fdfdfd';
$easy_storefront_option['footer_section_bottom_color'] = '#3c4043';
$easy_storefront_option['footer_section_bottom_background_color'] = '#fff';

?>
</div> <!--end of content div-->
<footer id="colophon" role="contentinfo" class="footer_shop">
	<div class="container-fluid mb-5 pb-5">
        <div class="row pt-5">
			<?php                           
// параметры по умолчанию
$posts = get_posts( array(
'numberposts' => -1,
'category'    => 0,
'orderby'     => 'date',
'order'       => 'ASC',
'include'     => array(),
'exclude'     => array(),
'meta_key'    => '',
'meta_value'  =>'',
'post_type'   => 'Shop',
'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
setup_postdata($post);
?>
			
			
            <img class="footer-logo col-md-4 col-xl-3 offset-md-1  offset-xl-1" src="<?php the_field('logo-footer-img') ?>"
                alt="logo">
			
			
	                <?php
}

wp_reset_postdata(); // сброс
?>		
            <div class="footer-contact footer-contact-shop col-md-4 col-xl-3 offset-1">
                <?php                           
// параметры по умолчанию
$posts = get_posts( array(
'numberposts' => -1,
'category'    => 0,
'orderby'     => 'date',
'order'       => 'ASC',
'include'     => array(),
'exclude'     => array(),
'meta_key'    => '',
'meta_value'  =>'',
'post_type'   => 'contacts',
'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
setup_postdata($post);
?>
                <p><?php the_field('contact') ?></p>
                <?php
}

wp_reset_postdata(); // сброс
?>
				
				<?php                           
// параметры по умолчанию
$posts = get_posts( array(
'numberposts' => -1,
'category'    => 0,
'orderby'     => 'date',
'order'       => 'ASC',
'include'     => array(),
'exclude'     => array(),
'meta_key'    => '',
'meta_value'  =>'',
'post_type'   => 'shop',
'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
setup_postdata($post);
?>
                <div class="social-icons">
                    <span><a href="<?php the_field('facebook-link') ?>"><i
                                class="fab fa-facebook"></i></a></span>
                    <span><a href="<?php the_field('instagram-link') ?>"><i
                                class="fab fa-instagram"></i></a></span>
                    <span><a
                            href="<?php the_field('viber-link') ?>"><i
                                class="fab fa-viber"></i></a></span>
                    <span><a href="<?php the_field('telegram-link') ?>"><i class="fab fa-telegram"></i></a></span>
                </div>
				

            </div>
        </div>
    </div>
    <div class="scrollup">
        <!-- Иконка fa-chevron-up (Font Awesome) -->
        <i class="fas fa-arrow-alt-circle-up"></i>
    </div>
    <hr>
    <div class="footer__copy">
        <p class="footer__copy-text"><?php the_field('copyright-footer-shop') ?></p>
    </div>
	<?php
	}
	wp_reset_postdata(); // сброс
?>
</footer>
<!-- #colophon -->
<?php 
global $easy_storefront_option;	
if ( class_exists( 'WP_Customize_Control' ) ) {
   $easy_storefront_default_settings = new new_york_business_settings();
   $easy_storefront_option = wp_parse_args(  get_option( 'easy_storefront_option', array() ) , $easy_storefront_default_settings->default_data());  
}
if($easy_storefront_option['box_layout']){
	// end of wrapper div
	echo '</div>';
}

wp_footer(); 
?>
</body>
</html>
