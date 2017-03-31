<?php
/*
	Template Name: Home Page
*/
get_header(); ?>

<?php
	//Advanced Custom Fields
	$slide1_image				= get_field('slide1_image');
	$slide1_heading				= get_field('slide1_heading');
	$slide1_text				= get_field('slide1_text');
	$slide1_button1_text		= get_field('slide1_button1_text');
	$slide1_button1_link		= get_field('slide1_button1_link');
	$slide1_button2_text		= get_field('slide1_button2_text');
	$slide1_button2_link		= get_field('slide1_button2_link');
	$slide2_image				= get_field('slide2_image');
	$slide2_heading				= get_field('slide2_heading');
	$slide2_text				= get_field('slide2_text');
	$slide2_button1_text		= get_field('slide2_button1_text');
	$slide2_button1_link		= get_field('slide2_button1_link');
	$slide2_button2_text		= get_field('slide2_button2_text');
	$slide2_button2_link		= get_field('slide2_button2_link');
	$slide3_image				= get_field('slide3_image');
	$slide3_heading				= get_field('slide3_heading');
	$slide3_text				= get_field('slide3_text');
	$slide3_button1_text		= get_field('slide3_button1_text');
	$slide3_button1_link		= get_field('slide3_button1_link');
	$slide3_button2_text		= get_field('slide3_button2_text');
	$slide3_button2_link		= get_field('slide3_button2_link');

	$main_title					= get_field('main_title');
	$main_content				= get_field('main_content');
	$telephone_number			= get_field('telephone_number');
	$quote_button_text			= get_field('quote_button_text');
	$services_heading			= get_field('services_heading');
	$service1_image				= get_field('service1_image');
	$service1_button_text		= get_field('service1_button_text');
	$service1_button_link		= get_field('service1_button_link');
	$service2_image				= get_field('service2_image');
	$service2_button_text		= get_field('service2_button_text');
	$service2_button_link		= get_field('service2_button_link');
	$service3_image				= get_field('service3_image');
	$service3_button_text		= get_field('service3_button_text');
	$service3_button_link		= get_field('service3_button_link');

?>

<!-- CAROUSEL -->
<div id="myCarousel" class="carousel slide" data-ride="carousel"> 
    <!-- Carousel Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Carousel Content -->
    <div class="carousel-inner">
        <div class="item active"> <img src="<?php echo $slide1_image[url]; ?>" alt="<?php echo $slide1_image[alt]; ?>" style="width:100%">
            <div class="container">
                <div class="carousel-caption">
                    <h1><?php echo $slide1_heading; ?></h1>
                    <p><?php echo $slide1_text; ?></p>
                    <a class="btn btn-large btn-primary btnService" href="<?php echo $slide1_button1_link; ?>" role="button"><?php echo $slide1_button1_text; ?></a>
                    <a class="btn btn-large btn-primary btnService" href="<?php echo $slide1_button2_link; ?>" role="button"><?php echo $slide1_button2_text; ?></a>
                </div>
            </div>
        </div>
        <div class="item"> <img src="<?php echo $slide2_image[url]; ?>" alt="<?php echo $slide1_image[alt]; ?>" style="width:100%" data-src="">
            <div class="container">
                <div class="carousel-caption">
                    <h1><?php echo $slide2_heading; ?></h1>
                    <p><?php echo $slide2_text; ?></p>
                    <a class="btn btn-large btn-primary btnService" href="<?php echo $slide2_button1_link; ?>" role="button"><?php echo $slide2_button1_text; ?></a>
                    
                </div>
            </div>
        </div>
        <div class="item"> <img src="<?php echo $slide3_image[url]; ?>" alt="<?php echo $slide1_image[alt]; ?>" style="width:100%" data-src="">
            <div class="container">
                <div class="carousel-caption">
                    <h1><?php echo $slide3_heading; ?></h1>
                    <p><?php echo $slide3_text; ?></p>
                    <a class="btn btn-large btn-primary btnService" href="<?php echo $slide3_button1_link; ?>" role="button"><?php echo $slide3_button1_text; ?></a>
                    
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a> 
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a> 
</div>

<!-- MAIN CONTENT -->
<div class="container">
    <div class="row">
        <div class="col-sm-9">

        	

            <h1><?php echo $main_title; ?></h1>
            <?php echo $main_content; ?>
            <a href="contact-us" class="btn btn-lg btn-primary btn-warning btn-block"><?php echo $quote_button_text; ?></a>
        </div>
        <div class="col-sm-3 contactPhone">
            <div>
                <span><i class="fa fa-phone" aria-hidden="true"></i> Call</span> <a href="tel:<?php echo $main_title; ?>"><?php echo $telephone_number; ?></a>
            </div>
            <img class="mmiLogo" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/mmi-logo.png">
        </div> 
    </div>
    <div class="row">
        <h3 class="col-sm-12"><?php echo $services_heading; ?></h3>
        <div class="card col-sm-3">
            <a href="cleaning.html"><img class="cardImg" width="100%" src="<?php echo $service1_image[url]; ?>" alt="<?php echo $service1_image[alt]; ?>"></a>
            <a href="<?php echo $service1_button_link ?>" class="btn btn-lg btn-primary btnService btn-block"><?php echo $service1_button_text ?></a>
        </div>
        <div class="card col-sm-3">
            <a href="mowing.html"><img class="cardImg" width="100%" src="<?php echo $service2_image[url]; ?>" alt="<?php echo $service2_image[alt]; ?>"></a>
            <a href="<?php echo $service2_button_link ?>" class="btn btn-lg btn-primary btnService btn-block"><?php echo $service2_button_text ?></a>
        </div>
        <div class="card col-sm-3">
            <a href="gardening.html"><img class="cardImg" width="100%" src="<?php echo $service3_image[url]; ?>" alt="<?php echo $service3_image[alt]; ?>"></a>
            <a href="<?php echo $service3_button_link ?>" class="btn btn-lg btn-primary btnService btn-block"><?php echo $service3_button_text ?></a>
        </div>
        <div id="quotes" class="col-md-3 col-sm-9">

        <?php $loop = new WP_Query( array(  'post_type' => 'testimonials') ); ?>

			<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

				<div>
	                <cite><?php the_content(); ?></cite>
	            </div>
	            <br/>

			<?php endwhile; ?>

        </div>
    </div>
</div>

<?php
get_footer();
