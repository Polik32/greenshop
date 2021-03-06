<?php
/**
 * The template for displaying woocommerce pages
 *
 * @since 1.0

 */

get_header(); 

$new_york_business_content = 'col-sm-8 col-md-8 col-lg-9 col-xs-12';
$new_york_business_sidebar = '';
if ( ! is_active_sidebar( 'sidebar-woocommerce' ) ) {
	$new_york_business_content = 'col-sm-12 col-md-12 col-lg-12';
	$new_york_business_sidebar = 'hide-content';	
}	
?>

<div class="container background">
   <div class="row">
 
	<div id="primary" class="<?php echo $new_york_business_content; ?>   content-area">
		<main id="main" class="site-main" role="main">

		<?php if (class_exists('WooCommerce') && is_woocommerce()) : ?>	
			<?php woocommerce_breadcrumb(); ?>	
		<?php endif; ?>		

		<?php woocommerce_content(); ?>

		</main><!-- #main --> 

	</div><!-- #primary -->

			<div class="col-md-4 col-sm-4 col-lg-3 col-xs-12 floateright   <?php echo $new_york_business_sidebar; ?>" > 
				<?php get_template_part('sidebar','woocommerce'); ?>			
			</div>

  </div>		
</div><!-- .container -->

<?php
get_footer();
