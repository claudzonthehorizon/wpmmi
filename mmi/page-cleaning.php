<?php
/*
	Template Name: Cleaning Page
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
	$bond_cleaning_heading		= get_field('bond_cleaning_heading');
	$bond_cleaning_content		= get_field('bond_cleaning_content');
	$bond_cleaning_inclusions_heading			= get_field('bond_cleaning_inclusions_heading');
	$regular_cleaning_heading		= get_field('regular_cleaning_heading');
	$regular_cleaning_content		= get_field('regular_cleaning_content');
	$regular_cleaning_inclusions_heading			= get_field('regular_cleaning_inclusions_heading');
	$onceoff_cleaning_heading		= get_field('onceoff_cleaning_heading');
	$onceoff_cleaning_content		= get_field('onceoff_cleaning_content');
	$onceoff_cleaning_inclusions_heading			= get_field('onceoff_cleaning_inclusions_heading');
	$commercial_cleaning_heading		= get_field('commercial_cleaning_heading');
	$commercial_cleaning_content		= get_field('commercial_cleaning_content');

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
                <div class="carousel-caption cleaningCaption">
                    <h1><?php echo $slide1_heading; ?></h1>
                    <p><?php echo $slide1_text; ?></p>
                    <a class="btn btn-large btn-primary btnService" href="<?php echo $slide1_button1_link; ?>" role="button"><?php echo $slide1_button1_text; ?></a>
                    <a class="btn btn-large btn-primary btnService" href="<?php echo $slide1_button2_link; ?>" role="button"><?php echo $slide1_button2_text; ?></a>
                </div>
            </div>
        </div>
        <div class="item"> <img src="<?php echo $slide2_image[url]; ?>" alt="<?php echo $slide2_image[alt]; ?>" style="width:100%" data-src="">
            <div class="container">
                <div class="carousel-caption cleaningCaption">
                    <h1><?php echo $slide2_heading; ?></h1>
                    <p><?php echo $slide2_text; ?></p>
                    <a class="btn btn-large btn-primary btnService" href="<?php echo $slide2_button1_link; ?>" role="button"><?php echo $slide2_button1_text; ?></a>
                    <a class="btn btn-large btn-primary btnService" href="<?php echo $slide2_button2_link; ?>" role="button"><?php echo $slide2_button2_text; ?></a>
                </div>
            </div>
        </div>
        <div class="item"> <img src="<?php echo $slide3_image[url]; ?>" alt="<?php echo $slide3_image[alt]; ?>" style="width:100%" data-src="">
            <div class="container">
                <div class="carousel-caption cleaningCaption">
                    <h1><?php echo $slide3_heading; ?></h1>
                    <p><?php echo $slide3_text; ?></p>
                    <a class="btn btn-large btn-primary btnService" href="<?php echo $slide3_button1_link; ?>" role="button"><?php echo $slide3_button1_text; ?></a>
                    <a class="btn btn-large btn-primary btnService" href="<?php echo $slide3_button2_link; ?>" role="button"><?php echo $slide3_button2_text; ?></a>
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
        </div>
        <!-- Tab Buttons -->
        <div class="tabbable col-md-4 col-sm-12">
            <div class="col-md-12 col-sm-6">
                <a class="btn btn-lg btn-primary btn-block" href="#bond" data-toggle="tab">Pre-sale/Bond Cleaning</a>
                <a class="btn btn-lg btn-primary btn-block" href="#regular" data-toggle="tab">Regular Cleaning</a>
                <a class="btn btn-lg btn-primary btn-block" href="#onceoff" data-toggle="tab">Once-off Cleaning</a>
            </div>
            <div class="col-md-12 col-sm-6">
                    <a class="btn btn-lg btn-primary btn-block" href="#commercial" data-toggle="tab">Commercial Cleaning</a>
                    <a class="btn btn-lg btn-warning btn-block" href="contact-us">Get a Free Quote</a>
                    <a class="btn btn-lg btn-warning btn-block" href="gift-cards">Buy a Gift Card</a>
            </div>
        </div>
        <!-- Tab Content -->
        <div class="tab-content col-md-8 col-sm-12">
            <div class="tab-pane active" id="bond">
                <div class="col-md-12">
                    <h3><?php echo $bond_cleaning_heading; ?></h3>
                    <p><?php echo $bond_cleaning_content; ?></p>
                    <br/>
                    <h3><?php echo $bond_cleaning_inclusions_heading; ?></h3>
                    <div class="col-md-6 col-sm-6">

                    	<?php $loop = new WP_Query( array(  'post_type' => 'bond_inclusions1') ); ?>

							<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

								<h5><?php the_title(); ?></h5>
								<?php the_content(); ?>
					            <br/>

							<?php endwhile; ?>

                    </div>
                    <div class="col-md-6 col-sm-6">

                    <?php $loop = new WP_Query( array(  'post_type' => 'bond_inclusions2') ); ?>

							<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

								<h5><?php the_title(); ?></h5>
								<?php the_content(); ?>
					            <br/>

							<?php endwhile; ?>

                    </div>
                    <div class="col-md-12 col-sm-12">
                        <br/>

                        <?php $loop = new WP_Query( array(  'post_type' => 'bond_additional') ); ?>

                        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

								<h3><?php the_title(); ?></h3>
								<?php the_content(); ?>
					            <br/>

							<?php endwhile; ?>

                    </div>
                </div>
            </div>
            <div class="tab-pane" id="regular">
                <div class="col-md-12">
                    <h3><?php echo $regular_cleaning_heading; ?></h3>
                    <p><?php echo $regular_cleaning_content; ?></p>
                    <br/>
                    <h3><?php echo $regular_cleaning_inclusions_heading; ?></h3>
                    <div class="col-md-6 col-sm-6">
                        
                    <?php $loop = new WP_Query( array(  'post_type' => 'regular_inclusions1') ); ?>

							<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

								<h5><?php the_title(); ?></h5>
								<?php the_content(); ?>
					            <br/>

							<?php endwhile; ?>

                    </div>
                    <div class="col-md-6 col-sm-6">
                        
                    <?php $loop = new WP_Query( array(  'post_type' => 'regular_inclusions2') ); ?>

							<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

								<h5><?php the_title(); ?></h5>
								<?php the_content(); ?>
					            <br/>

							<?php endwhile; ?>

                    </div>
                </div>
            </div>
            <div class="tab-pane" id="onceoff">
                <div class="col-md-12">
                    <h3><?php echo $onceoff_cleaning_heading; ?></h3>
                    <p><?php echo $onceoff_cleaning_content; ?></p>
                    <br/>
                    <h3><?php echo $onceoff_cleaning_inclusions_heading; ?></h3>
                    <div class="col-md-6 col-sm-6">
                        
                    <?php $loop = new WP_Query( array(  'post_type' => 'onceoff_inclusions1') ); ?>

							<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

								<h5><?php the_title(); ?></h5>
								<?php the_content(); ?>
					            <br/>

							<?php endwhile; ?>

                    </div>
                    <div class="col-md-6 col-sm-6">
                        
                    <?php $loop = new WP_Query( array(  'post_type' => 'onceoff_inclusions2') ); ?>

							<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

								<h5><?php the_title(); ?></h5>
								<?php the_content(); ?>
					            <br/>

							<?php endwhile; ?>

                    </div>
                </div>
            </div>
            <div class="tab-pane" id="commercial">
                <div class="col-md-12">
                    <h3><?php echo $commercial_cleaning_heading; ?></h3>
                    <p><?php echo $commercial_cleaning_content; ?></p>
                </div>
            </div>
        </div>
        <!-- /tabs -->
    </div>
</div>

<?php
get_footer();
