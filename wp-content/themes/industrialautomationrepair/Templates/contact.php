
<?php 
/* Template Name: Contact */
get_header();
?>
    <section class="inner_banner bg_style" style="background-image: url('<?php echo get_stylesheet_directory_uri( __FILE__);?>/assets/img/contact-banner.jpg')">
        <div class="container">
            <div class="inner_bnner_txt text-center">
                <h1 class="mb-0">Contact Us</h1>
            </div>
        </div>
    </section>
    <section class="contact_form p_8">
        <div class="container">
            <div class="contact_inner">
                <div class="row">
                     <div class="col-md-4">
                        <div class="contact_office">
                            <h3>Office Canada</h3>
                            <div class="office_cont">
                                <img src="<?php echo get_stylesheet_directory_uri( __FILE__);?>/assets/img/office_phone.png" alt="">
                                <p><a href="tel:4169046155">416-904-6155</a> / <a href="tel:9054545003">905-454-5003 </a></p>
                            </div>
                            <div class="office_cont">
                                <img src="<?php echo get_stylesheet_directory_uri( __FILE__);?>/assets/img/office_number.png" alt="">
                                <p>905-454-7866</p>
                            </div>
                            <div class="office_cont">
                                <img src="<?php echo get_stylesheet_directory_uri( __FILE__);?>/assets/img/office_mail.png" alt="">
                                <p><a href="mailto:info@industrialautomationrepair.com">info@industrialautomationrepair.com</a></p>
                            </div>
                            <div class="office_cont">
                                <img src="<?php echo get_stylesheet_directory_uri( __FILE__);?>/assets/img/office_navigation.png" alt="">
                                <p>Industrial Automation Repair. 1299 Matheson Blvd E. Mississauga, Ontario, L4W 1R1</p>
                            </div>
                        </div>
                        <div class="contact_office">
                            <h3>Office USA</h3>
                            <div class="office_cont">
                                <img src="<?php echo get_stylesheet_directory_uri( __FILE__);?>/assets/img/office_phone.png" alt="">
                                <p><a href="tel:18779046155">1-877-904-6155</a></p>
                            </div>
                            <div class="office_cont">
                                <img src="<?php echo get_stylesheet_directory_uri( __FILE__);?>/assets/img/office_mail.png" alt="">
                                <p><a href="mailto:info@industrialautomationrepair.com">info@industrialautomationrepair.com</a></p>
                            </div>
                            <div class="office_cont">
                                <img src="<?php echo get_stylesheet_directory_uri( __FILE__);?>/assets/img/office_navigation.png" alt="">
                                <p>Industrial Automation Repair. 123 Vine St. Sunman, IN 47041 USA</p>
                            </div>
                        </div>
                    </div> 
                     <div class="col-md-8">
                        <div class="contact_main_form">
                            <form action="">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" placeholder="Full name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" placeholder="Phone Number">
                                    </div>
                                    <div class="col-md-12">
                                        <input type="email" placeholder="Email">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="contact_form_btn">
                                            <input class="" type="submit" value="Submit">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>
    <?php 
get_footer()

?>