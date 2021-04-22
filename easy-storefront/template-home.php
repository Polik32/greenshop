<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package new-theme
 * 
 * Template Name: Home page
 */
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" href="<?php the_field('site_title') ?>" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <title><?php the_field('site_title') ?></title>
    <meta name="google-site-verification" content="2VJC4CvLdnEX3rDa03ZNAs5h9KayFutP6PEe8dRW--g" />
    <?php wp_head(); ?>
</head>
<body>
<div class="preloader">
  <div class="preloader__row">
    <div class="preloader__item"></div>
    <div class="preloader__item"></div>
  </div>
</div>
    <div class="pop-overlay">
        <div id="popup-window" class="popup-window">
            <div class="inner">
                <form id="contact" action="<?php echo get_template_directory_uri()?>/mail.php" method="post">
					<a href="javascript:void(0);" class="btn-close">Х</a>
                    <h3 id="title"><?php the_field('form_header') ?></h3>
                    <div id="note"></div>
                    <div class="form-head" id="fields">
                        <input type="text" name="name" placeholder="<?php the_field('placeholder_field_name') ?>" required>
                        <input type="text" name="tel" placeholder="<?php the_field('placeholder_field_telephone') ?>" required>
                        <textarea name="message" placeholder="<?php the_field('placeholder_field_message') ?>" style="height:150px" required></textarea>
                        <button type="submit" class="bt-popup-send-mail"
                            style="vertical-align:middle"><?php the_field('submit_button_text') ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <header>
        <nav class="nav_header-menu">
            <div class="container">
                <div class="row">
                    <img src="<?php the_field('logo-header') ?>" alt="logo">
                    <ul class="menu-main col-9">
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
	'post_type'   => 'menu',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
	setup_postdata($post);
   ?>
                        <li><a href="<?php the_field('href') ?>"><?php the_field('menu_name') ?></a></li>
                        <?php
}

wp_reset_postdata(); // сброс
	?>
                    </ul>
                    <!-- Collapse button -->
                    <button class="navbar-toggler second-button col-2 ml-auto mt-auto mb-auto align-self-end"
                        type="button" data-toggle="collapse" data-target="#navbarSupportedContent23"
                        aria-controls="navbarSupportedContent23" aria-expanded="false" aria-label="Toggle navigation">
                        <div class="animated-icon2"><span></span><span></span><span></span><span></span></div>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent23">
                        <ul class="navbar-nav mr-auto">
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
	'post_type'   => 'menu',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );
foreach( $posts as $post ){
	setup_postdata($post);
   ?>
                            <li class="nav-item"><a class="nav-link"
                                    href="<?php the_field('href') ?>"><?php the_field('menu_name') ?></a></li>
                            <?php
}
wp_reset_postdata(); // сброс
	?>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
       <section class="path-one-info-greenway"
    style="background-image: url(<?php the_field('background-path-one-info-greenway') ?>); background-repeat: no-repeat; background-size: cover;">
		   
    <div class="cloud">
        <img src="<?php the_field('background-path-one-info-greenway_clouds') ?>" alt="image" class="cloud4">
    </div>
    <img class="moon" src="<?php the_field('moon') ?>">
    <img class="sun" src="<?php the_field('sun') ?>">
    <div class="logo-about-us-primar-wrapper">
        <img class="logo-about-us-primary" src="<?php the_field('logo-about-us-primary') ?>"
            alt="image">
    </div>
    <div class="path-one-info-greenway__block-2">
        <p class="path-one-info-greenway__block-2__text"><?php the_field('tagline_for_the_main_page') ?></p>
		<!--<?php echo do_shortcode('[product_category per_page="4" orderby="date" order="desc" category="for woman"]');?>-->
        <button class="bt-popup" style="vertical-align:middle" id="popup" href="javascript:void(0);"><span><?php the_field('button-text') ?></span></button>
    </div>
</section>
<div class="wrapper">
    <a class="pulse" href="#2"><i class="fas fa-angle-double-down"></i></a>
</div>
<section class="about_us" style="background: <?php the_field('about_us-hex') ?>" id="1">
    <div class="container">
        <div class="row about_us-wrapper">
			<div class="about_us__block-two col-4 wow fadeInUp">
                <img class="about_us__block-two__img" src="<?php the_field('logo_about_us') ?>"
                    alt="image">
            </div>
            <div class="about_us__block-one col-8">
                <p class="about_us__block-one__text wow fadeInUp"><?php the_field('text_about_us') ?>
                </p>
            </div>
        </div>
    </div>
    <img class="about_us__img" src="<?php the_field('about_us__img') ?>" alt="image">
</section>
<section class="catalog " style="background: <?php the_field('background-all-hex') ?>" id="2">
    <h1 class="section-name"><?php the_field('first_name_section') ?></h1>
    <div class="container">
        <div class="row">
            <div class="catalog__items col-12">
                <?php                           

$posts = get_posts( array(
	'numberposts' => -1,
	'category'    => 0,
	'orderby'     => 'date',
	'order'       => 'ASC',
	'include'     => array(),
	'exclude'     => array(),
	'meta_key'    => '',
	'meta_value'  =>'',
	'post_type'   => 'cards',
	'suppress_filters' => true,
) );
	foreach( $posts as $post ){
	setup_postdata($post);
   ?>
                <div class="catalog__item col-xl-3 col-md-4 col-sm-8 wow fadeInUp" data-wow-duration="0.35s"
                    data-wow-delay="0.15s">
                    <img class="catalog__item__logo" src="<?php echo get_the_post_thumbnail_url(); ?>"
                        alt="image">
                    <p class="catalog__item__name"><?php the_title() ?></p>
                    <p class="catalog__item__description"><?php the_field('description') ?></p>
                    <img class="catalog__item__img" src="<?php the_field('imgdown') ?>"
                        alt="image">
                    <div class="catalog__item__fon-hover">
                        <a href="http://greenshop.zzz.com.ua/?product_cat=<?php the_field('product_category') ?>" ><img class="catalog__item__button-hover"
                                src="<?php echo get_template_directory_uri()?>/assets/img/finger.png"
                                alt="button"></a>
                    </div>
                </div>				

                <?php } wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
    <section class="pay-and-delivery"
        style="background: url(<?php the_field('background-pay-and-delivery') ?>), <?php the_field('background-all-hex') ?>; background-repeat: no-repeat; background-size: contain;"
        id="3">
        <h1 class="section-name"><?php the_field('second_name_section') ?></h1>
        <div class="container">
            <div class="row">
				<div class="pay-and-delivery__text col-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
					<p class="pay-and-delivery-head-text"><?php the_field('pay_and_delivery-text') ?></p>
					<p><?php the_field('pay_text') ?></p>
					<p><?php the_field('delivery_text') ?></p>
				</div>
		  <div class="container">
            <div class="row">
				<div class="pay-and-delivery-link col-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
					<a class="pay-and-delivery__liqpay col-6" href="<?php the_field('payment-link') ?>">
                            <img class="pay-and-delivery__liqpay__img" src="<?php the_field('pay_logo') ?>"
                                alt="image">
                        </a>
					<a class="pay-and-delivery__nova-poshta col-6" href="<?php the_field('delivery-link') ?>">
                            <img class="pay-and-delivery__nova-poshta__img" src="<?php the_field('delivery_logo') ?>"
                                alt="image">
                        </a>
				</div>
             </div>
          </div>
            </div>
        </div>
    </section>
    <style>
        .start-bussines {
            background: url("<?php the_field('background-start-bussines-img-second') ?>"), url("<?php the_field('background-start-bussines-img-first') ?>"), <?php the_field('background-all-hex') ?>;
            background-repeat: no-repeat;
            background-position-x: -130px, right;
            background-position-y: bottom, 100px;
            background-size: auto, auto;
        }

        @media screen and (max-width: 991px) {
            .start-bussines {
                background: url("<?php the_field('background-start-bussines-img-second') ?>"), <?php the_field('background-all-hex') ?>;
                background-repeat: no-repeat;
                background-position-x: -130px, right;
                background-position-y: bottom, 100px;
                background-size: auto, auto;
            }
        }
    </style>
    <section class="start-bussines" id="4">
        <h1 class="section-name"><?php the_field('third_name_section') ?></h1>
        <div class="container">
            <div class="row">
                <p class="start-bussines__tagline col-12 wow fadeInUp" data-wow-duration="0.35s" data-wow-delay="0.15s">
                    <?php the_field('start_bussines_tagline') ?></p>
                <p class="start-bussines__text col-12 wow fadeInUp" data-wow-duration="0.55s" data-wow-delay="0.35s">
                    <?php the_field('start-bussines-text') ?></p>
            </div>
            <div class="row wow fadeInUp" data-wow-duration="0.55s" data-wow-delay="0.35s">
                <div class="start-bussines__contacts col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <p class="start-bussines__contacts__name"><?php the_field('phones_header') ?></p>
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
                    <p class="start-bussines__contacts__mentor"><?php the_field('wish_from_us') ?></p>
                </div>
                <div class="start-bussines__bid col-6">
                    <p id="title-bussines"><?php the_field('text_above_the_form') ?></p>
                    <form id="contact-bussines" action="<?php echo get_template_directory_uri()?>/mail_business.php"
                        method="post">
                        <div id="note-bussines"></div>
                        <div class="form-head" id="fields-bussines">
							<input type="text" name="name" placeholder="<?php the_field('placeholder_field_name') ?>" required>
                        	<input type="text" name="tel" placeholder="<?php the_field('placeholder_field_telephone') ?>" required>
                        	<textarea name="message" placeholder="<?php the_field('placeholder_field_message') ?>" style="height:150px" required></textarea>
                            <button type="submit" class="bt-popup-send-mail"
                                style="vertical-align:middle"><?php the_field('submit_button_text') ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="reviews"
        style="background: url(<?php the_field('reviews-img') ?>), <?php the_field('background-all-hex') ?>; background-repeat: no-repeat; background-size:contain;"
        id="5">
        <h1 class="section-name"><?php the_field('fourth_name_section') ?></h1>
        <div class="container">
            <div class="row">
                <div class="reviews__items wow ">
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
	'post_type'   => 'review',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );
	foreach( $posts as $post ){
	setup_postdata($post);
   ?>
                    <div class="reviews__item col-12">
                        <p class="reviews__item__name"><?php the_field('name') ?></p>
                        <p class="reviews__item__town"><?php the_field('town') ?></p>
                        <p class="reviews__item__text"><?php the_field('text') ?></p>
                        <p class="reviews__item__date"><?php the_field('date') ?></p>
                    </div>
                    <?php } wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>
	<section class="questions" id="6">
		<h1 class="section-name"><?php the_field('five_name_section') ?></h1>
		<div class="container">
            <div class="row">
				<div class="accordion-block wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.15s">
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
'post_type'   => 'questions',
'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
setup_postdata($post);
?>
				<button class="accordion"><?php the_field('question') ?></button>
					<div class="panel">
 						 <p><?php the_field('answer') ?></p>
					</div>
<?php
}

wp_reset_postdata(); // сброс
?>
				</div>	
		   </div>
        </div>	
	</section>

<footer>
    <div class="container-fluid mb-5 pb-5">
        <div class="row pt-5">
            <img class="footer-logo col-md-4 col-xl-3 offset-md-1  offset-xl-1" src="<?php the_field('logo_footer') ?>"
                alt="logo">
            <ul class="menu-footer col-2  offset-xl-1">
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
'post_type'   => 'menu',
'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
setup_postdata($post);
?>
                <li><a href="<?php the_field('href') ?>"><?php the_field('menu_name') ?></a></li>
                <?php
}

wp_reset_postdata(); // сброс
?>
            </ul>
            <div class="footer-contact col-md-4 col-xl-3 offset-1">
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
                <div class="social-icons">
                    <span><a href="<?php the_field('facebook') ?>"><i
                                class="fab fa-facebook"></i></a></span>
                    <span><a href="<?php the_field('instagram') ?>"><i
                                class="fab fa-instagram"></i></a></span>
                    <span><a
                            href="<?php the_field('viber') ?>"><i
                                class="fab fa-viber"></i></a></span>
                    <span><a href="<?php the_field('telegram') ?>"><i class="fab fa-telegram"></i></a></span>
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
        <p class="footer__copy-text"><?php the_field('copyright_text') ?></p>
    </div>
</footer>
<!-- jQuery, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<!-- Slick Slider JS -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- jS -->
<?php wp_footer(); ?>
	<script type='text/javascript'>
    new WOW().init();
</script>
</body>
</html>

