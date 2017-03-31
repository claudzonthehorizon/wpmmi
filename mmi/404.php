<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package mmi
 */

get_header(); ?>

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
        <div class="item active"> <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/cleaningCarousel.jpg" alt="Cleaning" style="width:100%">
        </div>
        <div class="item"> <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/mowingCarousel.jpg" alt="Mowing" style="width:100%" data-src="">
        </div>
        <div class="item"> <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/gardeningCarousel.jpg" alt="Gardening" style="width:100%" data-src="">
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a> 
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a> 
</div>

	<div class="container">
		
		<div id="primary" class="row">
				
			<main id="content" class="col-sm-12" style="text-align: center">
				
				<h1 class="page-title">Oops! That page cannot be found.</h1>
				
				<div class="error-404 not-found">
					
					<div class="page-content">
						
						<h3>Don't fret! Perhaps you were looking for:</h3>
						<br/>
						<div class="card col-sm-4">
				            <a href="cleaning.html"><img class="cardImg" width="100%" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/cleaningCard.jpg" alt="Cleaning"></a>
				            <a href="<?php echo $service1_button_link ?>" class="btn btn-lg btn-primary btnService btn-block">Cleaning</a>
				        </div>
				        <div class="card col-sm-4">
				            <a href="mowing.html"><img class="cardImg" width="100%" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/mowingCard.jpg" alt="Mowing"></a>
				            <a href="<?php echo $service2_button_link ?>" class="btn btn-lg btn-primary btnService btn-block">Mowing</a>
				        </div>
				        <div class="card col-sm-4">
				            <a href="gardening.html"><img class="cardImg" width="100%" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/gardeningCard.jpg" alt="Gardening"></a>
				            <a href="<?php echo $service3_button_link ?>" class="btn btn-lg btn-primary btnService btn-block">Gardening</a>
				        </div>
						
					</div><!-- .page-content -->
					
				</div><!-- .error-404 -->
			
			</main><!-- #content -->
				
		</div><!-- #primary -->
		
	</div><!-- .container -->

<?php
get_footer();
