<?php
/*
	Template Name: Mowing Page
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
                <div class="carousel-caption mowingCaption">
                    <h1><?php echo $slide1_heading; ?></h1>
                    <p><?php echo $slide1_text; ?></p>
                    <a class="btn btn-large btn-primary btnService" href="<?php echo $slide1_button1_link; ?>" role="button"><?php echo $slide1_button1_text; ?></a>
                    
                </div>
            </div>
        </div>
        <div class="item"> <img src="<?php echo $slide2_image[url]; ?>" alt="<?php echo $slide2_image[alt]; ?>" style="width:100%" data-src="">
            <div class="container">
                <div class="carousel-caption mowingCaption">
                    <h1><?php echo $slide2_heading; ?></h1>
                    <p><?php echo $slide2_text; ?></p>
                    <a class="btn btn-large btn-primary btnService" href="<?php echo $slide2_button1_link; ?>" role="button"><?php echo $slide2_button1_text; ?></a>
                    
                </div>
            </div>
        </div>
        <div class="item"> <img src="<?php echo $slide3_image[url]; ?>" alt="<?php echo $slide3_image[alt]; ?>" style="width:100%" data-src="">
            <div class="container">
                <div class="carousel-caption mowingCaption">
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
        <div class="col-md-12">
            <h1><?php echo $main_title; ?></h1>
            <p><?php echo $main_content; ?></p>
        </div>
        <!-- Tab Buttons -->
        <div class="tabbable col-md-4 col-sm-12">
            <!--<div class="col-md-12 col-sm-6">
                <a class="btn btn-lg btn-warning btn-block" href="#mowing" data-toggle="tab">Lawn Mowing</a>
            </div>-->
            <div class="col-md-12">
                <a class="btn btn-lg btn-warning btn-block" href="contact-us">Get a Free Quote</a>
                <a class="btn btn-lg btn-warning btn-block" href="gift-cards">Buy a Gift Card</a>
            </div>
        </div>
        <!--<div class="tab-content col-md-8">
            <div class="tab-pane active" id="mowing">

            </div>
        </div>-->
        <!-- /tabs -->
    </div>
</div>

<?php
get_footer();
