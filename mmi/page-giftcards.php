<?php
/*
	Template Name: Gift Cards Page
*/

get_header(); ?>

<?php
	//Advanced Custom Fields
	$main_title					= get_field('main_title');
	$main_content				= get_field('main_content');

?>

<!-- MAIN CONTENT -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1><?php echo $main_title; ?></h1>
            <?php echo $main_content; ?>
        </div>
    </div>
</div>

<!-- Gift Cards-->
<div class="container" id="giftCards">
    <div class="row">

        <div class="col-md-6 col-lg-4 col-sm-6 giftCardContainer">
            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
				<input type="hidden" name="cmd" value="_cart">
				<input type="hidden" name="business" value="mmidomesticservices@gmail.com">
				<input type="hidden" name="lc" value="AU">
				<input type="hidden" name="item_name" value="$70 Gift Card">
				<input type="hidden" name="amount" value="70.00">
				<input type="hidden" name="currency_code" value="AUD">
				<input type="hidden" name="button_subtype" value="products">
				<input type="hidden" name="add" value="1">
				<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHosted">
				<img alt="$70 gift card" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/giftcard1.png" class="giftCard img-responsive">
                <h3>2 hours - $70 gift card</h3>
				<input type="image" src="https://www.paypalobjects.com/en_AU/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" width="1" height="1">
			</form>
        </div>
        <div class="col-md-6 col-lg-4 col-sm-6 giftCardContainer">
        	<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
				<input type="hidden" name="cmd" value="_cart">
				<input type="hidden" name="business" value="mmidomesticservices@gmail.com">
				<input type="hidden" name="lc" value="AU">
				<input type="hidden" name="item_name" value="$140 Gift Card">
				<input type="hidden" name="amount" value="140.00">
				<input type="hidden" name="currency_code" value="AUD">
				<input type="hidden" name="button_subtype" value="products">
				<input type="hidden" name="add" value="1">
				<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHosted">
				<img alt="$70 gift card" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/giftcard2.png" class="giftCard img-responsive">
                <h3>4 hours - $140 gift card</h3>
				<input type="image" src="https://www.paypalobjects.com/en_AU/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" width="1" height="1">
			</form>
        </div>
    </div>
</div>

<?php
get_footer();
