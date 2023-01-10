
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
                            <?php foreach (get_field('office_location_1') as $key => $value) {?>
                            <div class="office_cont">
                                <img src="<?php echo $value['icon'];?>" alt="">
                                <p><a ><?php echo $value['content'];?></a></p>
                            </div>
                           <?php }?>
                        </div>
                        <div class="contact_office">
                            <h3>Office USA</h3>
                            <?php foreach (get_field('office_location_2') as $key => $value) {?>
                            <div class="office_cont">
                                <img src="<?php echo $value['icon'];?>" alt="">
                                <p><a ><?php echo $value['content'];?></a></p>
                            </div>
                           <?php }?>
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