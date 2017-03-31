<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mmi
 */

?>

<?php wp_footer(); ?>

<!-- FOOTER -->
        <div class="container-fluid" id="footer">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <?php
								wp_nav_menu( array(
									
									'theme_location'	=> 'footer',
									'container'			=> 'nav',
									'menu_class'		=> 'list-unstyled list-inline'
									
								) );
							?>  
                        </div> 
                        <div class="col-md-12">
                            <p><i class="fa fa-copyright" aria-hidden="true"></i> MMI Domestic Services 2017 | ABN 46470780710</p>  
                            <p><i class="fa fa-paint-brush" aria-hidden="true"></i> green colour chosen by Mackenzie McLaren</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- JQUERY SCRIPT -->
        <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
        <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.1.1.min.js"></script>

        <!-- BOOTSTRAP SCRIPT -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>

        <!-- CAROUSEL SCRIPT -->
        <script src="<?php bloginfo('template_directory'); ?>/assets/js/carousel.js"></script>
        
    </body>
</html>


</body>
</html>
