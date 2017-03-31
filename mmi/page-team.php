<?php
/*
	Template Name: Team Page
*/

get_header(); ?>

<?php
	//Advanced Custom Fields
	$main_title					= get_field('main_title');
	$quote_button_text			= get_field('quote_button_text');

?>

<!-- MAIN CONTENT -->
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1><?php echo $main_title; ?></h1>
        </div>

        <?php $loop = new WP_Query( array(  'post_type' => 'team_members') ); ?>

					<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

						<div class="col-md-4 col-sm-6">
		                    <div class="card" style="width: 33rem;">
		                        <img class="card-img-top img-responsive" src="<?php the_post_thumbnail(); ?>
		                        <div class="card-block">
		                            <h4 class="card-title"><?php the_title(); ?></h4>
		                            <p class="card-text"><?php the_content(); ?></p>
		                        </div>
		                    </div>
		                </div>

					<?php endwhile; ?>
        
            
        </div>
        <div class="col-md-12 col-sm-12">
            <a href="contact-us" class="btn btn-lg btn-primary btn-warning btn-block"><?php echo $quote_button_text; ?></a>
        <br/>
        </div>
    </div>
</div>

<?php
get_footer();
