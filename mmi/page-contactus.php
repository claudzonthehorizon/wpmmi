<?php
/*
	Template Name: Contact Us Page
*/

get_header(); ?>

<?php
	//Advanced Custom Fields
	$main_title					= get_field('main_title');
	$telephone_number			= get_field('telephone_number');
	$facebook_username			= get_field('facebook_username');
	$hipages_username			= get_field('hipages_username');
	$giftcard_button_text		= get_field('giftcard_button_text');

?>

<!-- QUOTE / CONTACT US FORM -->
<div id="" class="container">
    <div>
        <div id="quote" class="col-md-12">
            <form class="col-md-8" action="https://formspree.io/claudzonthehorizon@gmail.com" method="POST">
                <h1><?php echo $main_title; ?></h1>
                <div class="detailsForm col-md-12">
                    <div class="form-group col-md-2">
                        <span>Your Details</span>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group col-md-7">
                            <input type="text" class="form-control" placeholder="Name" name="Name" id="name">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" class="form-control" placeholder="Phone number *" required name="Phone" id="phone">
                        </div>
                        <div class="form-group col-md-7">
                            <input type="text" class="form-control" placeholder="Email address *" required name="Email" id="email">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" class="form-control" placeholder="Suburb" name="Suburb" id="suburb">
                        </div>
                        <div class="form-group col-md-12">
                            <select class="form-control" placeholder="How often?" name="How often?" id="howoften">
                                <option >&nbsp;How often?</option>
                                <option value="Once-off">&nbsp;Once-off</option>
                                <option value="Weekly">&nbsp;Weekly</option>
                                <option value="Bi-weekly">&nbsp;Bi-weekly</option>
                                <option value="Monthly">&nbsp;Monthly</option>
                                <option value="Move in / Move out">&nbsp;Move in / Move out</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <textarea rows="4" cols="50" class="form-control" name="Additional information" placeholder="Additional information"></textarea>
                        </div>
                    </div> 
                </div>
                <div class="cleaningForm col-md-12">
                    <div class="form-group col-md-2">
                        <span>Cleaning</span>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group col-md-6">
                            <select class="form-control" placeholder="Type of home" name="Type of home" id="typeofhome">
                                <option >&nbsp;Type of home</option>
                                <option value="House">&nbsp;House</option>
                                <option value="Unit">&nbsp;Unit</option>
                                <option value="Townhouse">&nbsp;Townhouse</option>
                                <option value="Duplex">&nbsp;Duplex</option>
                                <option value="Duplex">&nbsp;Office</option>
                                </select>
                            </div>
                        <div class="form-group col-md-6">
                            <select class="form-control" placeholder="Number of bedrooms" name="Number of bedrooms" id="bedrooms">
                                <option >&nbsp;Number of bedrooms</option>
                                <option value="0">&nbsp;0</option>
                                <option value="1">&nbsp;1</option>
                                <option value="2">&nbsp;2</option>
                                <option value="3">&nbsp;3</option>
                                <option value="4">&nbsp;4</option>
                                <option value="5+">&nbsp;5+</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <select class="form-control" placeholder="Number of bathrooms" name="Number of bathrooms" id="bathrooms">
                                <option >&nbsp;Number of bathrooms</option>
                                <option value="0">&nbsp;0</option>
                                <option value="1">&nbsp;1</option>
                                <option value="2">&nbsp;2</option>
                                <option value="3">&nbsp;3</option>
                                <option value="4">&nbsp;4</option>
                                <option value="5+">&nbsp;5+</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <select class="form-control" placeholder="Type of clean" name="Type of clean" id="type">
                                <option >&nbsp;Type of clean</option>
                                <option value="Bond clean">&nbsp;Bond clean</option>
                                <option value="Pre-sale clean">&nbsp;Pre-sale clean</option>
                                <option value="Domestic/Residential clean">&nbsp;Domestic/Residential clean</option>
                                <option value="Commercial/Office clean">&nbsp;Commercial/Office clean</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mowingForm col-md-12">
                    <div class="form-group col-md-2">
                        <span>Mowing</span>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" placeholder="Yard size" name="Yard size" id="yard">
                        </div>
                    </div>
                </div>
                <div class="gardeningForm col-md-12">
                    <div class="form-group col-md-2">
                        <span>Gardening</span>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group col-md-9"> 
                            <fieldset>
                                <div class="formControlAsBG checkbox">
                                    <p>Type of Gardening</p>
                                    <input type="checkbox" id="gardening" name="Type" value="Gardening / weeding"/> <label for="gardening">Gardening / weeding</label><br>
                                    <input type="checkbox" id="spraying" name="Type" value="Weed or lawn spraying"/> <label for="spraying">Weed or lawn spraying</label><br>
                                    <input type="checkbox" id="fertilising" name="Type" value="Fertilising"/> <label for="fertilising">Fertilising</label><br>
                                    <input type="checkbox" id="pruning" name="Type" value="Pruning / hedging"/> <label for="pruning">Pruning / hedging</label><br>
                                    <input type="checkbox" id="turfing" name="Type" value="Turfind / Lawn repairs"/> <label for="landscaping">Turfing / Lawn repairs</label>
                                </div> 
                            </fieldset>
                        </div>
                    </div>   
                </div>
                <div class="col-md-12 detailsForm">
                    <div class="col-md-12 form-group">
                        <button class="btn btnSubmit btn-block btn-lg" type="submit">Get your free quote</button>
                    </div>
                </div>
            </form>
            <div class="col-sm-12 col-md-4 contactOther">
                <span><i class="fa fa-phone" aria-hidden="true"></i> Call</span> <a href="tel:<?php echo $telephone_number; ?>"><?php echo $telephone_number; ?></a><br/>
                <span><i class="fa fa-facebook-official" aria-hidden="true"></i> Find us on</span> <a href="<?php echo $facebook_username; ?>/mmidomesticservices/">facebook</a><br/>
                <span><i class="fa fa-home" aria-hidden="true"></i> Find us on</span> <a href="http://www.homeimprovementpages.com.au/connect/<?php echo $hipages_username; ?>">hipages</a><br/>
            </div>
            <div class="col-sm-12 col-md-4 btnGiftCard"> 
                <a class="btn btn-lg btn-primary btn-warning btn-block" href="gift-cards"><?php echo $giftcard_button_text; ?></a>
            </div>
            <div class="col-sm-12 col-md-4 contactOther"> 
                <img class="mmiLogo" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/mmi-logo.png">
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
